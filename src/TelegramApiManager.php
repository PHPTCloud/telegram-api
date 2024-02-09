<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Factory\ChatDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Factory\MessageDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Factory\TelegramBotDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\ChatDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\MessageDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\TelegramBotDomainServiceInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class TelegramApiManager implements TelegramApiManagerInterface
{
    private ?string $host = self::TELEGRAM_API_HOST;

    private ?MessageDomainServiceInterface $messageDomainService = null;
    private ?TelegramBotDomainServiceInterface $telegramBotDomainService = null;
    private ?ChatDomainServiceInterface $chatDomainService = null;

    public function __construct(
        private readonly TelegramBotInterface $bot,
        private readonly TelegramBotDomainServiceFactoryInterface $telegramBotDomainServiceFactory,
        private readonly MessageDomainServiceFactoryInterface $messageDomainServiceFactory,
        private readonly ChatDomainServiceFactoryInterface $chatDomainServiceFactory,
    ) {
    }

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
        if (null === $this->telegramBotDomainService) {
            $this->telegramBotDomainService = $this->telegramBotDomainServiceFactory->create($this->bot, $this->host);
        }

        return $this->telegramBotDomainService->getMe();
    }

    public function logOut(): bool
    {
        if (null === $this->telegramBotDomainService) {
            $this->telegramBotDomainService = $this->telegramBotDomainServiceFactory->create($this->bot, $this->host);
        }

        return $this->telegramBotDomainService->logOut();
    }

    public function close(): bool
    {
        if (null === $this->telegramBotDomainService) {
            $this->telegramBotDomainService = $this->telegramBotDomainServiceFactory->create($this->bot, $this->host);
        }

        return $this->telegramBotDomainService->close();
    }

    public function sendMessage(MessageArgumentInterface $argument): MessageInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->sendMessage($argument);
    }

    public function forwardMessage(ForwardMessageArgumentInterface $argument): MessageInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->forwardMessage($argument);
    }

    public function forwardMessages(ForwardMessagesArgumentInterface $argument, bool $sortIds = false): array
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->forwardMessages($argument, $sortIds);
    }

    public function getChat(ChatIdArgumentInterface $argument): ChatInterface
    {
        if (null === $this->chatDomainService) {
            $this->chatDomainService = $this->chatDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->chatDomainService->getChat($argument);
    }
}
