<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Factory;

use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BanChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatIdArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\CopyMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\CopyMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForceReplyArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessagesArgumentArraySerializerInterface;
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
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeCustomEmojiArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeEmojiArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardRemoveArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyParametersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendAnimationArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendAudioArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendChatActionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendDocumentArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendMediaGroupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendPhotoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendVideoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendVideoNoteArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendVoiceArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatAdministratorCustomTitleArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatDescriptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatPhotoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetChatTitleArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMessageReactionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SwitchInlineQueryChosenChatArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UnbanChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UserArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\WebAppInfoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Serializer\BanChatMemberArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ChatAdministratorRightsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ChatIdIdArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\CopyMessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\CopyMessagesArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ForceReplyArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ForwardMessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ForwardMessagesArgumentArraySerializer;
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
use PHPTCloud\TelegramApi\Argument\Serializer\MessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MessageEntityArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReactionTypeArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReactionTypeCustomEmojiArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReactionTypeEmojiArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReplyKeyboardMarkupArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReplyKeyboardRemoveArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReplyParametersArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendAnimationArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendAudioArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendChatActionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendDocumentArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendMediaGroupArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendPhotoArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendVideoArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendVideoNoteArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SendVoiceArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetChatAdministratorCustomTitleArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetChatDescriptionArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetChatPhotoArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetChatTitleArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SetMessageReactionArgumentArraySerializer;
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
            case BanChatMemberArgumentArraySerializer::class:
            case BanChatMemberArgumentArraySerializerInterface::class:
                return $this->createBanChatMemberArgumentArraySerializer();
            case UnbanChatMemberArgumentArraySerializer::class:
            case UnbanChatMemberArgumentArraySerializerInterface::class:
                return $this->createUnbanChatMemberArgumentArraySerializer();
            case SetChatAdministratorCustomTitleArgumentArraySerializer::class:
            case SetChatAdministratorCustomTitleArgumentArraySerializerInterface::class:
                return $this->createSetChatAdministratorCustomTitleArgumentArraySerializer();
            default:
                throw new \InvalidArgumentException(sprintf('Тип %s не может быть создан данной фабрикой.', $type));
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
}
