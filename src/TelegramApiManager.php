<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BanChatMemberArgumentInterface;
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
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatAdministratorCustomTitleArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatTitleArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMessageReactionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UnbanChatMemberArgumentInterface;
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
        return $this->getTelegramBotDomainService()->getMe();
    }

    public function logOut(): bool
    {
        return $this->getTelegramBotDomainService()->logOut();
    }

    public function close(): bool
    {
        return $this->getTelegramBotDomainService()->close();
    }

    public function sendMessage(MessageArgumentInterface $argument): MessageInterface
    {
        return $this->getMessageDomainService()->sendMessage($argument);
    }

    public function forwardMessage(ForwardMessageArgumentInterface $argument): MessageInterface
    {
        return $this->getMessageDomainService()->forwardMessage($argument);
    }

    public function forwardMessages(ForwardMessagesArgumentInterface $argument, bool $sortIds = false): array
    {
        return $this->getMessageDomainService()->forwardMessages($argument, $sortIds);
    }

    public function copyMessage(CopyMessageArgumentInterface $argument): MessageId
    {
        return $this->getMessageDomainService()->copyMessage($argument);
    }

    public function copyMessages(CopyMessagesArgumentInterface $argument, bool $sortIds = false): array
    {
        return $this->getMessageDomainService()->copyMessages($argument, $sortIds);
    }

    public function sendPhoto(SendPhotoArgumentInterface $argument): MessageInterface
    {
        return $this->getMessageDomainService()->sendPhoto($argument);
    }

    public function sendAudio(SendAudioArgumentInterface $argument): MessageInterface
    {
        return $this->getMessageDomainService()->sendAudio($argument);
    }

    public function sendDocument(SendDocumentArgumentInterface $argument): MessageInterface
    {
        return $this->getMessageDomainService()->sendDocument($argument);
    }

    public function sendVideo(SendVideoArgumentInterface $argument): MessageInterface
    {
        return $this->getMessageDomainService()->sendVideo($argument);
    }

    public function sendAnimation(SendAnimationArgumentInterface $argument): MessageInterface
    {
        return $this->getMessageDomainService()->sendAnimation($argument);
    }

    public function sendVoice(SendVoiceArgumentInterface $argument): MessageInterface
    {
        return $this->getMessageDomainService()->sendVoice($argument);
    }

    public function sendVideoNote(SendVideoNoteArgumentInterface $argument): MessageInterface
    {
        return $this->getMessageDomainService()->sendVideoNote($argument);
    }

    public function sendMediaGroup(SendMediaGroupArgumentInterface $argument): array
    {
        return $this->getMessageDomainService()->sendMediaGroup($argument);
    }

    public function setMessageReaction(SetMessageReactionArgumentInterface $argument): bool
    {
        return $this->getMessageDomainService()->setMessageReaction($argument);
    }

    public function getChat(ChatIdArgumentInterface $argument): ChatInterface
    {
        return $this->getChatDomainService()->getChat($argument);
    }

    public function sendChatAction(SendChatActionArgumentInterface $argument): bool
    {
        return $this->getChatDomainService()->sendChatAction($argument);
    }

    public function setChatPhoto(SetChatPhotoArgumentInterface $argument): bool
    {
        return $this->getChatDomainService()->setChatPhoto($argument);
    }

    public function deleteChatPhoto(ChatIdArgumentInterface $argument): bool
    {
        return $this->getChatDomainService()->deleteChatPhoto($argument);
    }

    public function leaveChat(ChatIdArgumentInterface $argument): bool
    {
        return $this->getChatDomainService()->leaveChat($argument);
    }

    public function setChatTitle(SetChatTitleArgumentInterface $argument): bool
    {
        return $this->getChatDomainService()->setChatTitle($argument);
    }

    public function setChatDescription(SetChatDescriptionArgumentInterface $argument): bool
    {
        return $this->getChatDomainService()->setChatDescription($argument);
    }

    public function getChatMemberCount(ChatIdArgumentInterface $argument): int
    {
        return $this->getChatDomainService()->getChatMemberCount($argument);
    }

    public function banChatMember(BanChatMemberArgumentInterface $argument): bool
    {
        return $this->getChatDomainService()->banChatMember($argument);
    }

    public function unbanChatMember(UnbanChatMemberArgumentInterface $argument): bool
    {
        return $this->getChatDomainService()->unbanChatMember($argument);
    }

    public function setChatAdministratorCustomTitle(SetChatAdministratorCustomTitleArgumentInterface $argument): bool
    {
        return $this->getChatDomainService()->setChatAdministratorCustomTitle($argument);
    }

    private function getChatDomainService(): ChatDomainServiceInterface
    {
        if (null === $this->chatDomainService) {
            $this->chatDomainService = $this->chatDomainServiceFactory->create($this->bot, $this->host);
        }

        return $this->chatDomainService;
    }

    private function getMessageDomainService(): MessageDomainServiceInterface
    {
        if (null === $this->messageDomainService) {
            $this->messageDomainService = $this->messageDomainServiceFactory->create($this->bot, $this->host);
        }

        return $this->messageDomainService;
    }

    private function getTelegramBotDomainService(): TelegramBotDomainServiceInterface
    {
        if (null === $this->telegramBotDomainService) {
            $this->telegramBotDomainService = $this->telegramBotDomainServiceFactory->create($this->bot, $this->host);
        }

        return $this->telegramBotDomainService;
    }
}
