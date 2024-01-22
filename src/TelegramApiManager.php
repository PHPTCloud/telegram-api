<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Argument\Interfaces\MessageArgumentInterface;
use PHPTCloud\TelegramApi\DomainService\Factory\MessageDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Factory\TelegramBotDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\MessageDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\TelegramBotDomainServiceInterface;
use PHPTCloud\TelegramApi\Exception\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class TelegramApiManager implements
    TelegramApiManagerInterface,
    MessageDomainServiceInterface,
    TelegramBotDomainServiceInterface
{
    private ?string $host = self::TELEGRAM_API_HOST;

    public function __construct(
        private readonly TelegramBotInterface                     $bot,
        private readonly TelegramBotDomainServiceFactoryInterface $telegramBotDomainServiceFactory,
        private readonly MessageDomainServiceFactoryInterface     $messageDomainServiceFactory,
    ) {}

    public function setTelegramApiHost(string $host): void
    {
        $this->host = $host;
    }

    public function getBot(): TelegramBotInterface
    {
        return $this->bot;
    }

    public function getMe(): UserInterface
    {
        return $this->telegramBotDomainServiceFactory->create($this->bot, $this->host)->getMe();
    }

    public function logOut(): bool
    {
        return $this->telegramBotDomainServiceFactory->create($this->bot, $this->host)->logOut();
    }

    public function close(): bool
    {
        return $this->telegramBotDomainServiceFactory->create($this->bot, $this->host)->close();
    }

    public function sendMessage(MessageArgumentInterface $argument): MessageInterface
    {
        return $this->messageDomainServiceFactory->create(
            $this->bot,
            $this->host,
        )->sendMessage($argument);
    }
}
