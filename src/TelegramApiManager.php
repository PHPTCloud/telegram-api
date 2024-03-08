<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendAnimationArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendAudioArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendDocumentArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendMediaGroupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVideoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVideoNoteArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVoiceArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatTitleArgumentInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Factory\ChatDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Factory\MessageDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Factory\TelegramBotDomainServiceFactoryInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\ChatDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\MessageDomainServiceInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\TelegramBotDomainServiceInterface;
use PHPTCloud\TelegramApi\Type\DataObject\MessageId;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
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

    public function copyMessage(CopyMessageArgumentInterface $argument): MessageId
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->copyMessage($argument);
    }

    public function copyMessages(CopyMessagesArgumentInterface $argument, bool $sortIds = false): array
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->copyMessages($argument, $sortIds);
    }

    public function sendPhoto(SendPhotoArgumentInterface $argument): MessageInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->sendPhoto($argument);
    }

    public function sendAudio(SendAudioArgumentInterface $argument): MessageInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->sendAudio($argument);
    }

    public function sendDocument(SendDocumentArgumentInterface $argument): MessageInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->sendDocument($argument);
    }

    public function sendVideo(SendVideoArgumentInterface $argument): MessageInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->sendVideo($argument);
    }

    public function sendAnimation(SendAnimationArgumentInterface $argument): MessageInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->sendAnimation($argument);
    }

    public function sendVoice(SendVoiceArgumentInterface $argument): MessageInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->sendVoice($argument);
    }

    public function sendVideoNote(SendVideoNoteArgumentInterface $argument): MessageInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->sendVideoNote($argument);
    }

    public function sendMediaGroup(SendMediaGroupArgumentInterface $argument): array
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->messageDomainService->sendMediaGroup($argument);
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

    public function sendChatAction(SendChatActionArgumentInterface $argument): bool
    {
        if (null === $this->chatDomainService) {
            $this->chatDomainService = $this->chatDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->chatDomainService->sendChatAction($argument);
    }

    public function setChatPhoto(SetChatPhotoArgumentInterface $argument): bool
    {
        if (null === $this->chatDomainService) {
            $this->chatDomainService = $this->chatDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->chatDomainService->setChatPhoto($argument);
    }

    public function deleteChatPhoto(ChatIdArgumentInterface $argument): bool
    {
        if (null === $this->chatDomainService) {
            $this->chatDomainService = $this->chatDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->chatDomainService->deleteChatPhoto($argument);
    }

    public function leaveChat(ChatIdArgumentInterface $argument): bool
    {
        if (null === $this->chatDomainService) {
            $this->chatDomainService = $this->chatDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->chatDomainService->leaveChat($argument);
    }

    public function setChatTitle(SetChatTitleArgumentInterface $argument): bool
    {
        if (null === $this->chatDomainService) {
            $this->chatDomainService = $this->chatDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->chatDomainService->setChatTitle($argument);
    }

    public function setChatDescription(SetChatDescriptionArgumentInterface $argument): bool
    {
        if (null === $this->chatDomainService) {
            $this->chatDomainService = $this->chatDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->chatDomainService->setChatDescription($argument);
    }

    public function getChatMemberCount(ChatIdArgumentInterface $argument): int
    {
        if (null === $this->chatDomainService) {
            $this->chatDomainService = $this->chatDomainServiceFactory->create(
                $this->bot,
                $this->host,
            );
        }

        return $this->chatDomainService->getChatMemberCount($argument);
    }
}
