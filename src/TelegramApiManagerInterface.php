<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageCaptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageMediaArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageTextArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ExportChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMenuButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetFileArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\RevokeChatInviteLinkArgumentInterface;
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
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UnbanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\ValueObject\UrlValueObjectInterface;
use PHPTCloud\TelegramApi\Type\DataObject\MessageId;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatAdministratorRightsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInviteLinkInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\FileInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonCommandsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonDefaultInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonWebAppInterface;
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

    public function getChatMember(GetChatMemberArgumentInterface $argument): ChatMemberInterface;

    public function banChatMember(BanChatMemberArgumentInterface $argument): bool;

    public function unbanChatMember(UnbanChatMemberArgumentInterface $argument): bool;

    public function setChatAdministratorCustomTitle(SetChatAdministratorCustomTitleArgumentInterface $argument): bool;

    public function exportChatInviteLink(ExportChatInviteLinkArgumentInterface $argument): UrlValueObjectInterface;

    public function revokeChatInviteLink(RevokeChatInviteLinkArgumentInterface $argument): ChatInviteLinkInterface;

    public function deleteMessages(DeleteMessagesArgumentInterface $argument): bool;

    public function deleteMessage(DeleteMessageArgumentInterface $argument): bool;

    public function getFile(GetFileArgumentInterface $argument): FileInterface;

    public function editMessageText(EditMessageTextArgumentInterface $argument): MessageInterface;

    public function editMessageCaption(EditMessageCaptionArgumentInterface $argument): MessageInterface;

    public function editMessageMedia(EditMessageMediaArgumentInterface $argument): MessageInterface;

    public function getMyDefaultAdministratorRights(
        GetMyDefaultAdministratorRightsArgumentInterface $argument
    ): ChatAdministratorRightsInterface;

    public function setMyDefaultAdministratorRights(SetMyDefaultAdministratorRightsArgumentInterface $argument): bool;

    public function getChatMenuButton(
        GetChatMenuButtonArgumentInterface $argument,
    ): MenuButtonCommandsInterface|MenuButtonDefaultInterface|MenuButtonWebAppInterface;
}
