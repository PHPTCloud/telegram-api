<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Factory;

use PHPTCloud\TelegramApi\Argument\Interfaces\Factory\SerializersAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatIdArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\CopyMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForceReplyArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonPollTypeArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonRequestChatArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonRequestUsersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LinkPreviewOptionsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LoginUrlArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardRemoveArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyParametersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SwitchInlineQueryChosenChatArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UserArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\WebAppInfoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Serializer\ChatAdministratorRightsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ChatIdIdArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\CopyMessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ForceReplyArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ForwardMessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ForwardMessagesArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\InlineKeyboardButtonArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\InlineKeyboardMarkupArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\KeyboardButtonArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\KeyboardButtonPollTypeArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\KeyboardButtonRequestChatArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\KeyboardButtonRequestUsersArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\LinkPreviewOptionsArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\LoginUrlArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MessageArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\MessageEntityArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReplyKeyboardMarkupArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReplyKeyboardRemoveArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\ReplyParametersArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\SwitchInlineQueryChosenChatArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\UserArgumentArraySerializer;
use PHPTCloud\TelegramApi\Argument\Serializer\WebAppInfoArgumentArraySerializer;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
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
}
