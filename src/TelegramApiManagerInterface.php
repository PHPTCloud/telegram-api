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
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatTitleArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMessageReactionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UnbanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Type\DataObject\MessageId;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageIdInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface TelegramApiManagerInterface
{
    public const TELEGRAM_API_HOST = 'https://api.telegram.org';

    public function getBot(): TelegramBotInterface;

    public function setTelegramApiHost(string $host): void;

    public function getMe(): UserInterface;

    public function logOut(): bool;

    public function close(): bool;

    public function sendMessage(MessageArgumentInterface $argument): MessageInterface;

    public function forwardMessage(ForwardMessageArgumentInterface $argument): MessageInterface;

    /**
     * @return MessageIdInterface[]
     */
    public function forwardMessages(ForwardMessagesArgumentInterface $argument, bool $sortIds = false): array;

    public function copyMessage(CopyMessageArgumentInterface $argument): MessageId;

    public function copyMessages(CopyMessagesArgumentInterface $argument, bool $sortIds = false): array;

    public function sendPhoto(SendPhotoArgumentInterface $argument): MessageInterface;

    public function sendAudio(SendAudioArgumentInterface $argument): MessageInterface;

    public function sendDocument(SendDocumentArgumentInterface $argument): MessageInterface;

    public function sendVideo(SendVideoArgumentInterface $argument): MessageInterface;

    public function sendAnimation(SendAnimationArgumentInterface $argument): MessageInterface;

    public function sendVoice(SendVoiceArgumentInterface $argument): MessageInterface;

    public function sendVideoNote(SendVideoNoteArgumentInterface $argument): MessageInterface;

    /**
     * @return MessageInterface[]
     */
    public function sendMediaGroup(SendMediaGroupArgumentInterface $argument): array;

    public function setMessageReaction(SetMessageReactionArgumentInterface $argument): bool;

    public function getChat(ChatIdArgumentInterface $argument): ChatInterface;

    public function sendChatAction(SendChatActionArgumentInterface $argument): bool;

    public function setChatPhoto(SetChatPhotoArgumentInterface $argument): bool;

    public function deleteChatPhoto(ChatIdArgumentInterface $argument): bool;

    public function leaveChat(ChatIdArgumentInterface $argument): bool;

    public function setChatTitle(SetChatTitleArgumentInterface $argument): bool;

    public function setChatDescription(SetChatDescriptionArgumentInterface $argument): bool;

    public function getChatMemberCount(ChatIdArgumentInterface $argument): int;

    public function banChatMember(BanChatMemberArgumentInterface $argument): bool;

    public function unbanChatMember(UnbanChatMemberArgumentInterface $argument): bool;
}
