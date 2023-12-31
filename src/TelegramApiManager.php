<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\DomainService\Factory\TelegramBotDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class TelegramApiManager implements TelegramApiManagerInterface
{
    private ?string $host = self::TELEGRAM_API_HOST;

    public function __construct(
        private readonly TelegramBotInterface $bot,
        private readonly TelegramBotDomainServiceFactoryInterface $domainServiceFactory,
    ) {}

    public function getBot(): TelegramBotInterface
    {
        return $this->bot;
    }

    public function getMe(): UserInterface
    {
        return $this->domainServiceFactory->create($this->bot, $this->host)->getMe();
    }

    public function logOut(): bool
    {
        return $this->domainServiceFactory->create($this->bot, $this->host)->logOut();
    }

    public function close(): bool
    {
        return $this->domainServiceFactory->create($this->bot, $this->host)->close();
    }

    public function setTelegramApiHost(string $host): void
    {
        $this->host = $host;
    }
}
