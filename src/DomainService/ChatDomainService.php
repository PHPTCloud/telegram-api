<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService;

use PHPTCloud\TelegramApi\Argument\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Serializer\ChatIdArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\DomainService\Enums\TelegramApiMethodEnum;
use PHPTCloud\TelegramApi\DomainService\Interfaces\ChatDomainServiceInterface;
use PHPTCloud\TelegramApi\Exception\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Interfaces\RequestInterface;
use PHPTCloud\TelegramApi\TelegramApiException;
use PHPTCloud\TelegramApi\Type\Deserializer\ChatDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Factory\DeserializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 */
class ChatDomainService implements ChatDomainServiceInterface
{
    public function __construct(
        private readonly RequestInterface                      $request,
        private readonly SerializersAbstractFactoryInterface   $serializersAbstractFactory,
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
        private readonly ExceptionAbstractFactoryInterface     $exceptionAbstractFactory,
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

        return  $deserializer->deserialize($response->getResponseData()[RequestInterface::RESULT_KEY]);
    }
}
