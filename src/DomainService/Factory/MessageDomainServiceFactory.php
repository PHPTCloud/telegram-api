<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Factory;

use PHPTCloud\TelegramApi\Argument\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\MessageDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\MessageDomainService;
use PHPTCloud\TelegramApi\Exception\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Request\Request;
use PHPTCloud\TelegramApi\TelegramApiManagerInterface;
use PHPTCloud\TelegramApi\TelegramBotInterface;
use PHPTCloud\TelegramApi\Type\Factory\DeserializersAbstractFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class MessageDomainServiceFactory implements MessageDomainServiceFactoryInterface
{
    public function __construct(
        private readonly DeserializersAbstractFactoryInterface $deserializersAbstractFactory,
        private readonly SerializersAbstractFactoryInterface   $serializersAbstractFactory,
        private readonly ExceptionAbstractFactoryInterface     $exceptionAbstractFactory,
    ) {}

    public function create(
        ?TelegramBotInterface $telegramBot = null,
        ?string               $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
    ): MessageDomainServiceInterface {
        return new MessageDomainService(
            Request::getInstance($telegramBot, $host),
            $this->deserializersAbstractFactory,
            $this->serializersAbstractFactory,
            $this->exceptionAbstractFactory,
        );
    }
}
