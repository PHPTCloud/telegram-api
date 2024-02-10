<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\CopyMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\CopyMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\DomainService\Enums\TelegramApiMethodEnum;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\MessageDomainServiceInterface;
use PHPTCloud\TelegramApi\Exception\Error\MessageIdsMustBeInIncreasingOrderException;
use PHPTCloud\TelegramApi\Exception\Error\TelegramApiException;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\RequestInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\DataObject\MessageId;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageIdInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\MessageDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\MessageIdDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\DeserializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Utils\Interface\Service\SortingAlgorithmServiceInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class MessageDomainService implements MessageDomainServiceInterface
{
    public function __construct(
        private readonly RequestInterface $request,
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
        private readonly SerializersAbstractFactoryInterface $serializersAbstractFactory,
        private readonly ExceptionAbstractFactoryInterface $exceptionAbstractFactory,
        private readonly SortingAlgorithmServiceInterface $sortingAlgorithmService,
    ) {
    }

    public function sendMessage(MessageArgumentInterface $argument): MessageInterface
    {
        /** @var MessageArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(MessageArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        if (isset($data[TelegramApiFieldEnum::REPLY_MARKUP->value])) {
            $data[TelegramApiFieldEnum::REPLY_MARKUP->value] = json_encode($data[TelegramApiFieldEnum::REPLY_MARKUP->value]);
        }

        $response = $this->request::post(TelegramApiMethodEnum::SEND_MESSAGE->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var MessageDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(MessageDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function forwardMessage(ForwardMessageArgumentInterface $argument): MessageInterface
    {
        /** @var ForwardMessageArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(ForwardMessageArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::FORWARD_MESSAGE->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var MessageDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(MessageDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    /**
     * @return MessageIdInterface[]
     *
     * @throws MessageIdsMustBeInIncreasingOrderException
     * @throws TelegramApiException
     */
    public function forwardMessages(ForwardMessagesArgumentInterface $argument, bool $sortIds = false): array
    {
        /** @var ForwardMessagesArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(ForwardMessagesArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        if ($sortIds) {
            $data[TelegramApiFieldEnum::MESSAGE_IDS->value]
                = $this->sortingAlgorithmService->sortArrayOfNumbers($data[TelegramApiFieldEnum::MESSAGE_IDS->value]);
        }

        $response = $this->request::post(TelegramApiMethodEnum::FORWARD_MESSAGES->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var MessageIdDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(MessageIdDeserializerInterface::class);
        $messageIds = array_map(static function (array $item) use ($deserializer) {
            return $deserializer->deserialize($item);
        }, $response->getResponseData()[RequestInterface::RESULT_KEY]);

        return $messageIds;
    }

    public function copyMessage(CopyMessageArgumentInterface $argument): MessageId
    {
        /** @var CopyMessageArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(CopyMessageArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::COPY_MESSAGE->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var MessageIdDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(MessageIdDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function copyMessages(CopyMessagesArgumentInterface $argument, bool $sortIds = false): array
    {
        /** @var CopyMessagesArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(CopyMessagesArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        if ($sortIds) {
            $data[TelegramApiFieldEnum::MESSAGE_IDS->value]
                = $this->sortingAlgorithmService->sortArrayOfNumbers($data[TelegramApiFieldEnum::MESSAGE_IDS->value]);
        }

        $response = $this->request::post(TelegramApiMethodEnum::COPY_MESSAGES->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var MessageIdDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(MessageIdDeserializerInterface::class);

        return array_map(static function (array $item) use ($deserializer) {
            return $deserializer->deserialize($item);
        }, $response->getResponseData()[RequestInterface::RESULT_KEY]);
    }
}
