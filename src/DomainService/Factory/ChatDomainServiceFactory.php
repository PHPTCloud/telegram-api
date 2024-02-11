<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Factory;

use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MultipartArraySerializerInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Factory\ChatDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\ChatDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Service\ChatDomainService;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Request;
use PHPTCloud\TelegramApi\TelegramApiManagerInterface;
use PHPTCloud\TelegramApi\TelegramBotInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\DeserializersAbstractFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * @version 1.0.0
 */
class ChatDomainServiceFactory implements ChatDomainServiceFactoryInterface
{
    public function __construct(
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
        private readonly SerializersAbstractFactoryInterface $serializersAbstractFactory,
        private readonly ExceptionAbstractFactoryInterface $exceptionAbstractFactory,
        private readonly MultipartArraySerializerInterface $multipartArraySerializer,
    ) {
    }

    public function create(
        TelegramBotInterface $telegramBot = null,
        ?string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
    ): ChatDomainServiceInterface {
        return new ChatDomainService(
            Request::getInstance($telegramBot, $host),
            $this->serializersAbstractFactory,
            $this->deserializersAbstractFactory,
            $this->exceptionAbstractFactory,
            $this->multipartArraySerializer,
        );
    }
}
