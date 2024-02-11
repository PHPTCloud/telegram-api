<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatIdArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MultipartArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendChatActionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatPhotoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\DomainService\Enums\TelegramApiMethodEnum;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\ChatDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\SupportsSendingMultipartInterface;
use PHPTCloud\TelegramApi\DomainService\Traits\SupportsSendingMultipartTrait;
use PHPTCloud\TelegramApi\Exception\Error\TelegramApiException;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\RequestInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\DeserializersAbstractFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * @version 1.0.0
 */
class ChatDomainService implements
    ChatDomainServiceInterface,
    SupportsSendingMultipartInterface
{
    use SupportsSendingMultipartTrait;

    public function __construct(
        private readonly RequestInterface $request,
        private readonly SerializersAbstractFactoryInterface $serializersAbstractFactory,
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
        private readonly ExceptionAbstractFactoryInterface $exceptionAbstractFactory,
        private readonly MultipartArraySerializerInterface $multipartArraySerializer,
    ) {
    }

    public function getChat(ChatIdArgumentInterface $argument): ChatInterface
    {
        /** @var ChatIdArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(ChatIdArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::GET_CHAT->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        /** @var ChatDeserializerInterface $deserializer */
        $deserializer = $this->deserializersAbstractFactory->create(ChatDeserializerInterface::class);

        return $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }

    public function sendChatAction(SendChatActionArgumentInterface $argument): bool
    {
        /** @var SendChatActionArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(SendChatActionArgumentArraySerializerInterface::class);
        $data = $serializer->serialize($argument);

        $response = $this->request::post(TelegramApiMethodEnum::SEND_CHAT_ACTION->value, $data);

        if ($response->isError()) {
            $exception = $this->exceptionAbstractFactory->createByApiErrorMessage($response->getErrorMessage());
            if ($exception) {
                throw $exception;
            }
            throw new TelegramApiException($response->getErrorMessage(), $response->getCode());
        }

        return $response->getResponseData()[RequestInterface::RESULT_KEY] ?? false;
    }

    public function setChatPhoto(SetChatPhotoArgumentInterface $argument): bool
    {
        /** @var SetChatPhotoArgumentArraySerializerInterface $serializer */
        $serializer = $this->serializersAbstractFactory->create(SetChatPhotoArgumentArraySerializerInterface::class);

        $response = $this->sendMultipart($serializer, $argument, TelegramApiMethodEnum::SET_CHAT_PHOTO->value);

        return $response->getResponseData()[RequestInterface::RESULT_KEY] ?? false;
    }
}
