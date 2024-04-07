<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Factory;

use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Factory\FileDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\FileDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Service\FileDomainService;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Request;
use PHPTCloud\TelegramApi\TelegramApiManagerInterface;
use PHPTCloud\TelegramApi\TelegramBotInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\DeserializersAbstractFactoryInterface;

class FileDomainServiceFactory implements FileDomainServiceFactoryInterface
{
    public function __construct(
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
        private readonly SerializersAbstractFactoryInterface $serializersAbstractFactory,
        private readonly ExceptionAbstractFactoryInterface $exceptionAbstractFactory,
    ) {
    }

    public function create(
        TelegramBotInterface $telegramBot = null,
        ?string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
    ): FileDomainServiceInterface {
        return new FileDomainService(
            Request::getInstance($telegramBot, $host),
            $this->serializersAbstractFactory,
            $this->deserializersAbstractFactory,
            $this->exceptionAbstractFactory,
        );
    }
}
