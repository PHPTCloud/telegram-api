<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Factory;

use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Factory\TelegramBotDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\TelegramBotDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Service\TelegramBotDomainService;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Request;
use PHPTCloud\TelegramApi\TelegramApiManagerInterface;
use PHPTCloud\TelegramApi\TelegramBotInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\DeserializersAbstractFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class TelegramBotDomainServiceFactory implements TelegramBotDomainServiceFactoryInterface
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
    ): TelegramBotDomainServiceInterface {
        return new TelegramBotDomainService(
            Request::getInstance($telegramBot, $host),
            $this->deserializersAbstractFactory,
            $this->serializersAbstractFactory,
            $this->exceptionAbstractFactory,
        );
    }
}
