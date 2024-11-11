<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Factory;

use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BanChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BotCommandArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BotCommandScopeArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatIdArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\CopyMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\CopyMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\DeleteChatStickerSetArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\DeleteMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\DeleteMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\DeleteMyCommandsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\EditMessageCaptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\EditMessageMediaArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\EditMessageTextArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ExportChatInviteLinkArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForceReplyArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetChatMenuButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetFileArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyCommandsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyDefaultAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyNameArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyShortDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaAudioArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaDocumentArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaPhotoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaVideoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonPollTypeArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonRequestChatArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonRequestUsersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LinkPreviewOptionsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LoginUrlArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MenuButtonCommandsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MenuButtonDefaultArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MenuButtonWebAppArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeCustomEmojiArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeEmojiArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardRemoveArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyParametersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\RevokeChatInviteLinkArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendAnimationArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendAudioArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendChatActionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendContactArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendDocumentArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendMediaGroupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendPhotoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendVenueArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendVideoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendVideoNoteArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendVoiceArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatAdministratorCustomTitleArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatMenuButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatPhotoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatTitleArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMessageReactionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyCommandsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyDefaultAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyNameArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyShortDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SwitchInlineQueryChosenChatArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UnbanChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UserArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\WebAppInfoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Serializer\BanChatMemberArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\BotCommandArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\BotCommandScopeArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ChatAdministratorRightsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ChatIdIdArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\CopyMessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\CopyMessagesArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\DeleteChatStickerSetArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\DeleteMessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\DeleteMessagesArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\DeleteMyCommandsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\EditMessageCaptionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\EditMessageMediaArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\EditMessageTextArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ExportChatInviteLinkArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ForceReplyArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ForwardMessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ForwardMessagesArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\GetChatMemberArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\GetChatMenuButtonArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\GetFileArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\GetMyCommandsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\GetMyDefaultAdministratorRightsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\GetMyDescriptionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\GetMyNameArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\GetMyShortDescriptionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\InlineKeyboardButtonArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\InlineKeyboardMarkupArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\InputMediaAudioArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\InputMediaDocumentArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\InputMediaPhotoArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\InputMediaVideoArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\KeyboardButtonArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\KeyboardButtonPollTypeArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\KeyboardButtonRequestChatArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\KeyboardButtonRequestUsersArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\LinkPreviewOptionsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\LoginUrlArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MenuButtonCommandsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MenuButtonDefaultArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MenuButtonWebAppArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MessageEntityArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReactionTypeArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReactionTypeCustomEmojiArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReactionTypeEmojiArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReplyKeyboardMarkupArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReplyKeyboardRemoveArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReplyParametersArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\RevokeChatInviteLinkArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendAnimationArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendAudioArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendChatActionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendContactArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendDocumentArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendMediaGroupArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendPhotoArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendVenueArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendVideoArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendVideoNoteArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendVoiceArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetChatAdministratorCustomTitleArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetChatDescriptionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetChatMenuButtonArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetChatPhotoArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetChatTitleArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetMessageReactionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetMyCommandsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetMyDefaultAdministratorRightsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetMyDescriptionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetMyNameArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetMyShortDescriptionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SwitchInlineQueryChosenChatArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\UnbanChatMemberArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\UserArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\WebAppInfoArgumentArraySerializer;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class SerializersAbstractFactory implements SerializersAbstractFactoryInterface
{
    public function create(string $type): SerializerInterface
    {
        switch ($type) {
            case MessageArgumentArraySerializerInterface::class:
            case MessageArgumentArraySerializer::class:
                return $this->createMessageArgumentArraySerializer();
            case MessageEntityArgumentArraySerializer::class:
            case MessageEntityArgumentArraySerializerInterface::class:
                return $this->createMessageEntityArgumentArraySerializer();
            case UserArgumentArraySerializer::class:
            case UserArgumentArraySerializerInterface::class:
                return $this->createUserArgumentArraySerializer();
            case LinkPreviewOptionsArgumentArraySerializer::class:
            case LinkPreviewOptionsArgumentArraySerializerInterface::class:
                return $this->createLinkPreviewOptionsArgumentArraySerializer();
            case ChatIdIdArgumentArraySerializer::class:
            case ChatIdArgumentArraySerializerInterface::class:
                return $this->createChatIdArgumentArraySerializer();
            case ReplyParametersArgumentArraySerializer::class:
            case ReplyParametersArgumentArraySerializerInterface::class:
                return $this->createReplyParametersArgumentArraySerializer();
            case InlineKeyboardMarkupArgumentArraySerializerInterface::class:
            case InlineKeyboardMarkupArgumentArraySerializer::class:
                return $this->createInlineKeyboardMarkupArgumentArraySerializer();
            case InlineKeyboardButtonArgumentArraySerializer::class:
            case InlineKeyboardButtonArgumentArraySerializerInterface::class:
                return $this->createInlineKeyboardButtonArgumentArraySerializer();
            case ReplyKeyboardRemoveArgumentArraySerializer::class:
            case ReplyKeyboardRemoveArgumentArraySerializerInterface::class:
                return $this->createReplyKeyboardRemoveArgumentArraySerializer();
            case ReplyKeyboardMarkupArgumentArraySerializer::class:
            case ReplyKeyboardMarkupArgumentArraySerializerInterface::class:
                return $this->createReplyKeyboardMarkupArgumentArraySerializer();
            case WebAppInfoArgumentArraySerializer::class:
            case WebAppInfoArgumentArraySerializerInterface::class:
                return $this->createWebAppInfoArgumentArraySerializer();
            case KeyboardButtonRequestUsersArgumentArraySerializer::class:
            case KeyboardButtonRequestUsersArgumentArraySerializerInterface::class:
                return $this->createKeyboardButtonRequestUsersArgumentArraySerializer();
            case KeyboardButtonRequestChatArgumentArraySerializerInterface::class:
            case KeyboardButtonRequestChatArgumentArraySerializer::class:
                return $this->createKeyboardButtonRequestChatArgumentArraySerializer();
            case ChatAdministratorRightsArgumentArraySerializer::class:
            case ChatAdministratorRightsArgumentArraySerializerInterface::class:
                return $this->createChatAdministratorRightsArgumentArraySerializer();
            case KeyboardButtonPollTypeArgumentArraySerializer::class:
            case KeyboardButtonPollTypeArgumentArraySerializerInterface::class:
                return $this->createKeyboardButtonPollTypeArgumentArraySerializer();
            case LoginUrlArgumentArraySerializer::class:
            case LoginUrlArgumentArraySerializerInterface::class:
                return $this->createLoginUrlArgumentArraySerializer();
            case SwitchInlineQueryChosenChatArgumentArraySerializer::class:
            case SwitchInlineQueryChosenChatArgumentArraySerializerInterface::class:
                return $this->createSwitchInlineQueryChosenChatArgumentArraySerializer();
            case ForceReplyArgumentArraySerializerInterface::class:
            case ForceReplyArgumentArraySerializer::class:
                return $this->createForceReplyArgumentArraySerializer();
            case ForwardMessageArgumentArraySerializer::class:
            case ForwardMessageArgumentArraySerializerInterface::class:
                return $this->createForwardMessageArgumentArraySerializer();
            case ForwardMessagesArgumentArraySerializer::class:
            case ForwardMessagesArgumentArraySerializerInterface::class:
                return $this->createForwardMessagesArgumentArraySerializer();
            case CopyMessageArgumentArraySerializer::class:
            case CopyMessageArgumentArraySerializerInterface::class:
                return $this->createCopyMessageArgumentArraySerializer();
            case CopyMessagesArgumentArraySerializer::class:
            case CopyMessagesArgumentArraySerializerInterface::class:
                return $this->createCopyMessagesArgumentArraySerializer();
            case SendPhotoArgumentArraySerializer::class:
            case SendPhotoArgumentArraySerializerInterface::class:
                return $this->createSendPhotoArgumentArraySerializer();
            case SendAudioArgumentArraySerializer::class:
            case SendAudioArgumentArraySerializerInterface::class:
                return $this->createSendAudioArgumentArraySerializer();
            case SendDocumentArgumentArraySerializer::class:
            case SendDocumentArgumentArraySerializerInterface::class:
                return $this->createSendDocumentArgumentArraySerializer();
            case SendChatActionArgumentArraySerializer::class:
            case SendChatActionArgumentArraySerializerInterface::class:
                return $this->createSendChatActionArgumentArraySerializer();
            case SetChatPhotoArgumentArraySerializer::class:
            case SetChatPhotoArgumentArraySerializerInterface::class:
                return $this->createSetChatPhotoArgumentArraySerializer();
            case SetChatTitleArgumentArraySerializer::class:
            case SetChatTitleArgumentArraySerializerInterface::class:
                return $this->createSetChatTitleArgumentArraySerializer();
            case SetChatDescriptionArgumentArraySerializer::class:
            case SetChatDescriptionArgumentArraySerializerInterface::class:
                return $this->createSetChatDescriptionTitleArgumentArraySerializer();
            case SendVideoArgumentArraySerializer::class:
            case SendVideoArgumentArraySerializerInterface::class:
                return $this->createSendVideoArgumentArraySerializer();
            case SendAnimationArgumentArraySerializer::class:
            case SendAnimationArgumentArraySerializerInterface::class:
                return $this->createSendAnimationArgumentArraySerializer();
            case SendVoiceArgumentArraySerializer::class:
            case SendVoiceArgumentArraySerializerInterface::class:
                return $this->createSendVoiceArgumentArraySerializer();
            case SendVideoNoteArgumentArraySerializer::class:
            case SendVideoNoteArgumentArraySerializerInterface::class:
                return $this->createSendVideoNoteArgumentArraySerializer();
            case InputMediaAudioArgumentArraySerializer::class:
            case InputMediaAudioArgumentArraySerializerInterface::class:
                return $this->createInputMediaAudioArgumentArraySerializer();
            case InputMediaVideoArgumentArraySerializer::class:
            case InputMediaVideoArgumentArraySerializerInterface::class:
                return $this->createInputMediaVideoArgumentArraySerializer();
            case InputMediaPhotoArgumentArraySerializer::class:
            case InputMediaPhotoArgumentArraySerializerInterface::class:
                return $this->createInputMediaPhotoArgumentArraySerializer();
            case InputMediaDocumentArgumentArraySerializer::class:
            case InputMediaDocumentArgumentArraySerializerInterface::class:
                return $this->createInputMediaDocumentArgumentArraySerializer();
            case SendMediaGroupArgumentArraySerializer::class:
            case SendMediaGroupArgumentArraySerializerInterface::class:
                return $this->createSendMediaGroupArgumentArraySerializer();
            case ReactionTypeEmojiArgumentArraySerializer::class:
            case ReactionTypeEmojiArgumentArraySerializerInterface::class:
                return $this->createReactionTypeEmojiArgumentArraySerializer();
            case ReactionTypeCustomEmojiArgumentArraySerializer::class:
            case ReactionTypeCustomEmojiArgumentArraySerializerInterface::class:
                return $this->createReactionTypeCustomEmojiArgumentArraySerializer();
            case SetMessageReactionArgumentArraySerializer::class:
            case SetMessageReactionArgumentArraySerializerInterface::class:
                return $this->createSetMessageReactionArgumentArraySerializer();
            case GetChatMemberArgumentArraySerializer::class:
            case GetChatMemberArgumentArraySerializerInterface::class:
                return $this->createGetChatMemberArgumentArraySerializer();
            case BanChatMemberArgumentArraySerializer::class:
            case BanChatMemberArgumentArraySerializerInterface::class:
                return $this->createBanChatMemberArgumentArraySerializer();
            case UnbanChatMemberArgumentArraySerializer::class:
            case UnbanChatMemberArgumentArraySerializerInterface::class:
                return $this->createUnbanChatMemberArgumentArraySerializer();
            case SetChatAdministratorCustomTitleArgumentArraySerializer::class:
            case SetChatAdministratorCustomTitleArgumentArraySerializerInterface::class:
                return $this->createSetChatAdministratorCustomTitleArgumentArraySerializer();
            case ExportChatInviteLinkArgumentArraySerializer::class:
            case ExportChatInviteLinkArgumentArraySerializerInterface::class:
                return $this->createExportChatInviteLinkArgumentArraySerializer();
            case RevokeChatInviteLinkArgumentArraySerializer::class:
            case RevokeChatInviteLinkArgumentArraySerializerInterface::class:
                return $this->createRevokeChatInviteLinkArgumentArraySerializer();
            case DeleteMessagesArgumentArraySerializer::class:
            case DeleteMessagesArgumentArraySerializerInterface::class:
                return $this->createDeleteMessagesArgumentArraySerializer();
            case DeleteMessageArgumentArraySerializer::class:
            case DeleteMessageArgumentArraySerializerInterface::class:
                return $this->createDeleteMessageArgumentArraySerializer();
            case GetFileArgumentArraySerializer::class:
            case GetFileArgumentArraySerializerInterface::class:
                return $this->createGetFileArgumentArraySerializer();
            case EditMessageTextArgumentArraySerializer::class:
            case EditMessageTextArgumentArraySerializerInterface::class:
                return $this->createEditMessageTextArgumentArraySerializer();
            case EditMessageCaptionArgumentArraySerializer::class:
            case EditMessageCaptionArgumentArraySerializerInterface::class:
                return $this->createEditMessageCaptionArgumentArraySerializer();
            case EditMessageMediaArgumentArraySerializer::class:
            case EditMessageMediaArgumentArraySerializerInterface::class:
                return $this->createEditMessageMediaArgumentArraySerializer();
            case GetMyDefaultAdministratorRightsArgumentArraySerializer::class:
            case GetMyDefaultAdministratorRightsArgumentArraySerializerInterface::class:
                return $this->createGetMyDefaultAdministratorRightsArgumentArraySerializer();
            case SetMyDefaultAdministratorRightsArgumentArraySerializer::class:
            case SetMyDefaultAdministratorRightsArgumentArraySerializerInterface::class:
                return $this->createSetMyDefaultAdministratorRightsArgumentArraySerializer();
            case GetChatMenuButtonArgumentArraySerializer::class:
            case GetChatMenuButtonArgumentArraySerializerInterface::class:
                return $this->createGetChatMenuButtonArgumentArraySerializer();
            case MenuButtonWebAppArgumentArraySerializer::class:
            case MenuButtonWebAppArgumentArraySerializerInterface::class:
                return $this->createMenuButtonWebAppArgumentArraySerializer();
            case MenuButtonCommandsArgumentArraySerializer::class:
            case MenuButtonCommandsArgumentArraySerializerInterface::class:
                return $this->createMenuButtonCommandsArgumentArraySerializer();
            case MenuButtonDefaultArgumentArraySerializer::class:
            case MenuButtonDefaultArgumentArraySerializerInterface::class:
                return $this->createMenuButtonDefaultArgumentArraySerializer();
            case SetChatMenuButtonArgumentArraySerializer::class:
            case SetChatMenuButtonArgumentArraySerializerInterface::class:
                return $this->createSetChatMenuButtonArgumentArraySerializer();
            case GetMyShortDescriptionArgumentArraySerializer::class:
            case GetMyShortDescriptionArgumentArraySerializerInterface::class:
                return $this->createGetMyShortDescriptionArgumentArraySerializer();
            case SetMyShortDescriptionArgumentArraySerializer::class:
            case SetMyShortDescriptionArgumentArraySerializerInterface::class:
                return $this->createSetMyShortDescriptionArgumentArraySerializer();
            case GetMyDescriptionArgumentArraySerializer::class:
            case GetMyDescriptionArgumentArraySerializerInterface::class:
                return $this->createGetMyDescriptionArgumentArraySerializer();
            case SetMyDescriptionArgumentArraySerializer::class:
            case SetMyDescriptionArgumentArraySerializerInterface::class:
                return $this->createSetMyDescriptionArgumentArraySerializer();
            case GetMyNameArgumentArraySerializer::class:
            case GetMyNameArgumentArraySerializerInterface::class:
                return $this->createGetMyNameArgumentArraySerializer();
            case SetMyNameArgumentArraySerializer::class:
            case SetMyNameArgumentArraySerializerInterface::class:
                return $this->createSetMyNameArgumentArraySerializer();
            case BotCommandScopeArraySerializer::class:
            case BotCommandScopeArraySerializerInterface::class:
                return $this->createBotCommandScopeArraySerializer();
            case GetMyCommandsArgumentArraySerializer::class:
            case GetMyCommandsArgumentArraySerializerInterface::class:
                return $this->createGetMyCommandsArgumentArraySerializer();
            case DeleteMyCommandsArgumentArraySerializer::class:
            case DeleteMyCommandsArgumentArraySerializerInterface::class:
                return $this->createDeleteMyCommandsArgumentArraySerializer();
            case BotCommandArgumentArraySerializer::class:
            case BotCommandArgumentArraySerializerInterface::class:
                return $this->createBotCommandArgumentArraySerializer();
            case SetMyCommandsArgumentArraySerializer::class:
            case SetMyCommandsArgumentArraySerializerInterface::class:
                return $this->createSetMyCommandsArgumentArraySerializer();
            case SendVenueArgumentArraySerializer::class:
            case SendVenueArgumentArraySerializerInterface::class:
                return $this->createSendVenueArgumentArraySerializer();
            case SendContactArgumentArraySerializer::class:
            case SendContactArgumentArraySerializerInterface::class:
                return $this->createSendContactArgumentArraySerializer();
            case DeleteChatStickerSetArgumentArraySerializer::class:
            case DeleteChatStickerSetArgumentArraySerializerInterface::class:
                return $this->createDeleteChatStickerSetArgumentArraySerializer();
            default:
                throw new \InvalidArgumentException(sprintf('Невозможно определить сериализатор для данного типа (%s).', $type));
        }
    }

    public function createMessageArgumentArraySerializer(): MessageArgumentArraySerializerInterface
    {
        return new MessageArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createLinkPreviewOptionsArgumentArraySerializer(),
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createMessageEntityArgumentArraySerializer(): MessageEntityArgumentArraySerializerInterface
    {
        return new MessageEntityArgumentArraySerializer(
            $this->createUserArgumentArraySerializer(),
        );
    }

    public function createUserArgumentArraySerializer(): UserArgumentArraySerializerInterface
    {
        return new UserArgumentArraySerializer();
    }

    public function createLinkPreviewOptionsArgumentArraySerializer(): LinkPreviewOptionsArgumentArraySerializerInterface
    {
        return new LinkPreviewOptionsArgumentArraySerializer();
    }

    public function createChatIdArgumentArraySerializer(): ChatIdArgumentArraySerializerInterface
    {
        return new ChatIdIdArgumentArraySerializer();
    }

    public function createReplyParametersArgumentArraySerializer(): ReplyParametersArgumentArraySerializerInterface
    {
        return new ReplyParametersArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
        );
    }

    public function createInlineKeyboardMarkupArgumentArraySerializer(): InlineKeyboardMarkupArgumentArraySerializerInterface
    {
        return new InlineKeyboardMarkupArgumentArraySerializer(
            $this->createInlineKeyboardButtonArgumentArraySerializer(),
        );
    }

    public function createInlineKeyboardButtonArgumentArraySerializer(): InlineKeyboardButtonArgumentArraySerializerInterface
    {
        return new InlineKeyboardButtonArgumentArraySerializer(
            $this->createWebAppInfoArgumentArraySerializer(),
            $this->createLoginUrlArgumentArraySerializer(),
            $this->createSwitchInlineQueryChosenChatArgumentArraySerializer(),
        );
    }

    public function createReplyKeyboardRemoveArgumentArraySerializer(): ReplyKeyboardRemoveArgumentArraySerializerInterface
    {
        return new ReplyKeyboardRemoveArgumentArraySerializer();
    }

    public function createReplyKeyboardMarkupArgumentArraySerializer(): ReplyKeyboardMarkupArgumentArraySerializerInterface
    {
        return new ReplyKeyboardMarkupArgumentArraySerializer(
            $this->createKeyboardButtonArgumentArraySerializer(),
        );
    }

    public function createKeyboardButtonArgumentArraySerializer(): KeyboardButtonArgumentArraySerializerInterface
    {
        return new KeyboardButtonArgumentArraySerializer(
            $this->createWebAppInfoArgumentArraySerializer(),
            $this->createKeyboardButtonRequestUsersArgumentArraySerializer(),
            $this->createKeyboardButtonRequestChatArgumentArraySerializer(),
            $this->createKeyboardButtonPollTypeArgumentArraySerializer(),
        );
    }

    public function createWebAppInfoArgumentArraySerializer(): WebAppInfoArgumentArraySerializerInterface
    {
        return new WebAppInfoArgumentArraySerializer();
    }

    public function createKeyboardButtonRequestUsersArgumentArraySerializer(): KeyboardButtonRequestUsersArgumentArraySerializerInterface
    {
        return new KeyboardButtonRequestUsersArgumentArraySerializer();
    }

    public function createKeyboardButtonRequestChatArgumentArraySerializer(): KeyboardButtonRequestChatArgumentArraySerializerInterface
    {
        return new KeyboardButtonRequestChatArgumentArraySerializer(
            $this->createChatAdministratorRightsArgumentArraySerializer(),
        );
    }

    public function createChatAdministratorRightsArgumentArraySerializer(): ChatAdministratorRightsArgumentArraySerializerInterface
    {
        return new ChatAdministratorRightsArgumentArraySerializer();
    }

    public function createKeyboardButtonPollTypeArgumentArraySerializer(): KeyboardButtonPollTypeArgumentArraySerializerInterface
    {
        return new KeyboardButtonPollTypeArgumentArraySerializer();
    }

    public function createLoginUrlArgumentArraySerializer(): LoginUrlArgumentArraySerializerInterface
    {
        return new LoginUrlArgumentArraySerializer();
    }

    public function createSwitchInlineQueryChosenChatArgumentArraySerializer(): SwitchInlineQueryChosenChatArgumentArraySerializerInterface
    {
        return new SwitchInlineQueryChosenChatArgumentArraySerializer();
    }

    public function createForceReplyArgumentArraySerializer(): ForceReplyArgumentArraySerializerInterface
    {
        return new ForceReplyArgumentArraySerializer();
    }

    public function createForwardMessageArgumentArraySerializer(): ForwardMessageArgumentArraySerializerInterface
    {
        return new ForwardMessageArgumentArraySerializer();
    }

    public function createForwardMessagesArgumentArraySerializer(): ForwardMessagesArgumentArraySerializerInterface
    {
        return new ForwardMessagesArgumentArraySerializer();
    }

    public function createCopyMessageArgumentArraySerializer(): CopyMessageArgumentArraySerializerInterface
    {
        return new CopyMessageArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createCopyMessagesArgumentArraySerializer(): CopyMessagesArgumentArraySerializerInterface
    {
        return new CopyMessagesArgumentArraySerializer();
    }

    public function createSendPhotoArgumentArraySerializer(): SendPhotoArgumentArraySerializerInterface
    {
        return new SendPhotoArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createSendAudioArgumentArraySerializer(): SendAudioArgumentArraySerializerInterface
    {
        return new SendAudioArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createSendDocumentArgumentArraySerializer(): SendDocumentArgumentArraySerializerInterface
    {
        return new SendDocumentArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createSendChatActionArgumentArraySerializer(): SendChatActionArgumentArraySerializerInterface
    {
        return new SendChatActionArgumentArraySerializer();
    }

    public function createSetChatPhotoArgumentArraySerializer(): SetChatPhotoArgumentArraySerializerInterface
    {
        return new SetChatPhotoArgumentArraySerializer();
    }

    public function createSetChatTitleArgumentArraySerializer(): SetChatTitleArgumentArraySerializerInterface
    {
        return new SetChatTitleArgumentArraySerializer();
    }

    public function createSetChatDescriptionTitleArgumentArraySerializer(): SetChatDescriptionArgumentArraySerializerInterface
    {
        return new SetChatDescriptionArgumentArraySerializer();
    }

    public function createSendVideoArgumentArraySerializer(): SendVideoArgumentArraySerializerInterface
    {
        return new SendVideoArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createSendAnimationArgumentArraySerializer(): SendAnimationArgumentArraySerializerInterface
    {
        return new SendAnimationArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createSendVoiceArgumentArraySerializer(): SendVoiceArgumentArraySerializerInterface
    {
        return new SendVoiceArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createSendVideoNoteArgumentArraySerializer(): SendVideoNoteArgumentArraySerializerInterface
    {
        return new SendVideoNoteArgumentArraySerializer(
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createInputMediaAudioArgumentArraySerializer(): InputMediaAudioArgumentArraySerializerInterface
    {
        return new InputMediaAudioArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
        );
    }

    public function createInputMediaVideoArgumentArraySerializer(): InputMediaVideoArgumentArraySerializerInterface
    {
        return new InputMediaVideoArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
        );
    }

    public function createInputMediaPhotoArgumentArraySerializer(): InputMediaPhotoArgumentArraySerializerInterface
    {
        return new InputMediaPhotoArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
        );
    }

    public function createInputMediaDocumentArgumentArraySerializer(): InputMediaDocumentArgumentArraySerializerInterface
    {
        return new InputMediaDocumentArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
        );
    }

    public function createSendMediaGroupArgumentArraySerializer(): SendMediaGroupArgumentArraySerializerInterface
    {
        return new SendMediaGroupArgumentArraySerializer(
            $this->createInputMediaAudioArgumentArraySerializer(),
            $this->createInputMediaDocumentArgumentArraySerializer(),
            $this->createInputMediaPhotoArgumentArraySerializer(),
            $this->createInputMediaVideoArgumentArraySerializer(),
            $this->createReplyParametersArgumentArraySerializer(),
        );
    }

    public function createReactionTypeEmojiArgumentArraySerializer(): ReactionTypeEmojiArgumentArraySerializerInterface
    {
        return new ReactionTypeEmojiArgumentArraySerializer();
    }

    public function createReactionTypeCustomEmojiArgumentArraySerializer(): ReactionTypeCustomEmojiArgumentArraySerializerInterface
    {
        return new ReactionTypeCustomEmojiArgumentArraySerializer();
    }

    public function createReactionTypeArgumentArraySerializer(): ReactionTypeArgumentArraySerializerInterface
    {
        return new ReactionTypeArgumentArraySerializer(
            $this->createReactionTypeCustomEmojiArgumentArraySerializer(),
            $this->createReactionTypeEmojiArgumentArraySerializer(),
        );
    }

    public function createSetMessageReactionArgumentArraySerializer(): SetMessageReactionArgumentArraySerializerInterface
    {
        return new SetMessageReactionArgumentArraySerializer(
            $this->createReactionTypeArgumentArraySerializer(),
        );
    }

    public function createGetChatMemberArgumentArraySerializer(): GetChatMemberArgumentArraySerializerInterface
    {
        return new GetChatMemberArgumentArraySerializer();
    }

    public function createBanChatMemberArgumentArraySerializer(): BanChatMemberArgumentArraySerializerInterface
    {
        return new BanChatMemberArgumentArraySerializer();
    }

    public function createUnbanChatMemberArgumentArraySerializer(): UnbanChatMemberArgumentArraySerializerInterface
    {
        return new UnbanChatMemberArgumentArraySerializer();
    }

    public function createSetChatAdministratorCustomTitleArgumentArraySerializer(): SetChatAdministratorCustomTitleArgumentArraySerializerInterface
    {
        return new SetChatAdministratorCustomTitleArgumentArraySerializer();
    }

    public function createExportChatInviteLinkArgumentArraySerializer(): ExportChatInviteLinkArgumentArraySerializerInterface
    {
        return new ExportChatInviteLinkArgumentArraySerializer();
    }

    public function createRevokeChatInviteLinkArgumentArraySerializer(): RevokeChatInviteLinkArgumentArraySerializerInterface
    {
        return new RevokeChatInviteLinkArgumentArraySerializer();
    }

    public function createDeleteMessagesArgumentArraySerializer(): DeleteMessagesArgumentArraySerializerInterface
    {
        return new DeleteMessagesArgumentArraySerializer();
    }

    public function createDeleteMessageArgumentArraySerializer(): DeleteMessageArgumentArraySerializerInterface
    {
        return new DeleteMessageArgumentArraySerializer();
    }

    public function createGetFileArgumentArraySerializer(): GetFileArgumentArraySerializerInterface
    {
        return new GetFileArgumentArraySerializer();
    }

    public function createEditMessageTextArgumentArraySerializer(): EditMessageTextArgumentArraySerializerInterface
    {
        return new EditMessageTextArgumentArraySerializer(
            $this->createMessageEntityArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createLinkPreviewOptionsArgumentArraySerializer(),
        );
    }

    public function createEditMessageCaptionArgumentArraySerializer(): EditMessageCaptionArgumentArraySerializerInterface
    {
        return new EditMessageCaptionArgumentArraySerializer(
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createMessageEntityArgumentArraySerializer(),
        );
    }

    public function createEditMessageMediaArgumentArraySerializer(): EditMessageMediaArgumentArraySerializerInterface
    {
        return new EditMessageMediaArgumentArraySerializer(
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createInputMediaVideoArgumentArraySerializer(),
            $this->createInputMediaPhotoArgumentArraySerializer(),
            $this->createInputMediaAudioArgumentArraySerializer(),
            $this->createInputMediaDocumentArgumentArraySerializer(),
        );
    }

    public function createGetMyDefaultAdministratorRightsArgumentArraySerializer(): GetMyDefaultAdministratorRightsArgumentArraySerializerInterface
    {
        return new GetMyDefaultAdministratorRightsArgumentArraySerializer();
    }

    public function createSetMyDefaultAdministratorRightsArgumentArraySerializer(): SetMyDefaultAdministratorRightsArgumentArraySerializerInterface
    {
        return new SetMyDefaultAdministratorRightsArgumentArraySerializer(
            $this->createChatAdministratorRightsArgumentArraySerializer(),
        );
    }

    public function createGetChatMenuButtonArgumentArraySerializer(): GetChatMenuButtonArgumentArraySerializerInterface
    {
        return new GetChatMenuButtonArgumentArraySerializer();
    }

    public function createMenuButtonWebAppArgumentArraySerializer(): MenuButtonWebAppArgumentArraySerializerInterface
    {
        return new MenuButtonWebAppArgumentArraySerializer(
            $this->createWebAppInfoArgumentArraySerializer(),
        );
    }

    public function createMenuButtonCommandsArgumentArraySerializer(): MenuButtonCommandsArgumentArraySerializerInterface
    {
        return new MenuButtonCommandsArgumentArraySerializer();
    }

    public function createMenuButtonDefaultArgumentArraySerializer(): MenuButtonDefaultArgumentArraySerializerInterface
    {
        return new MenuButtonDefaultArgumentArraySerializer();
    }

    public function createSetChatMenuButtonArgumentArraySerializer(): SetChatMenuButtonArgumentArraySerializerInterface
    {
        return new SetChatMenuButtonArgumentArraySerializer(
            $this->createMenuButtonDefaultArgumentArraySerializer(),
            $this->createMenuButtonCommandsArgumentArraySerializer(),
            $this->createMenuButtonWebAppArgumentArraySerializer(),
        );
    }

    public function createGetMyShortDescriptionArgumentArraySerializer(): GetMyShortDescriptionArgumentArraySerializerInterface
    {
        return new GetMyShortDescriptionArgumentArraySerializer();
    }

    public function createSetMyShortDescriptionArgumentArraySerializer(): SetMyShortDescriptionArgumentArraySerializerInterface
    {
        return new SetMyShortDescriptionArgumentArraySerializer();
    }

    public function createGetMyDescriptionArgumentArraySerializer(): GetMyDescriptionArgumentArraySerializerInterface
    {
        return new GetMyDescriptionArgumentArraySerializer();
    }

    public function createSetMyDescriptionArgumentArraySerializer(): SetMyDescriptionArgumentArraySerializerInterface
    {
        return new SetMyDescriptionArgumentArraySerializer();
    }

    public function createGetMyNameArgumentArraySerializer(): GetMyNameArgumentArraySerializerInterface
    {
        return new GetMyNameArgumentArraySerializer();
    }

    public function createSetMyNameArgumentArraySerializer(): SetMyNameArgumentArraySerializerInterface
    {
        return new SetMyNameArgumentArraySerializer();
    }

    public function createBotCommandScopeArraySerializer(): BotCommandScopeArraySerializerInterface
    {
        return new BotCommandScopeArraySerializer();
    }

    public function createGetMyCommandsArgumentArraySerializer(): GetMyCommandsArgumentArraySerializerInterface
    {
        return new GetMyCommandsArgumentArraySerializer(
            $this->createBotCommandScopeArraySerializer(),
        );
    }

    public function createDeleteMyCommandsArgumentArraySerializer(): DeleteMyCommandsArgumentArraySerializerInterface
    {
        return new DeleteMyCommandsArgumentArraySerializer(
            $this->createBotCommandScopeArraySerializer(),
        );
    }

    public function createBotCommandArgumentArraySerializer(): BotCommandArgumentArraySerializerInterface
    {
        return new BotCommandArgumentArraySerializer();
    }

    public function createSetMyCommandsArgumentArraySerializer(): SetMyCommandsArgumentArraySerializerInterface
    {
        return new SetMyCommandsArgumentArraySerializer(
            $this->createBotCommandArgumentArraySerializer(),
            $this->createBotCommandScopeArraySerializer(),
        );
    }

    public function createSendVenueArgumentArraySerializer(): SendVenueArgumentArraySerializerInterface
    {
        return new SendVenueArgumentArraySerializer(
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createSendContactArgumentArraySerializer(): SendContactArgumentArraySerializerInterface
    {
        return new SendContactArgumentArraySerializer(
            $this->createReplyParametersArgumentArraySerializer(),
            $this->createInlineKeyboardMarkupArgumentArraySerializer(),
            $this->createReplyKeyboardRemoveArgumentArraySerializer(),
            $this->createReplyKeyboardMarkupArgumentArraySerializer(),
            $this->createForceReplyArgumentArraySerializer(),
        );
    }

    public function createDeleteChatStickerSetArgumentArraySerializer(): DeleteChatStickerSetArgumentArraySerializerInterface
    {
        return new DeleteChatStickerSetArgumentArraySerializer();
    }
}
