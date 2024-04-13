<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeAllChatAdministratorsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeAllGroupChatsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeAllPrivateChatsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeChatAdministratorsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeChatArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeDefaultArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BotCommandScopeArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class BotCommandScopeArraySerializer implements BotCommandScopeArraySerializerInterface
{
    public function serialize(BotCommandScopeArgumentInterface $argument): array
    {
        if ($argument instanceof BotCommandScopeDefaultArgumentInterface) {
            return $this->serializeBotCommandScopeDefault($argument);
        } elseif ($argument instanceof BotCommandScopeAllChatAdministratorsArgumentInterface) {
            return $this->serializeBotCommandScopeAllChatAdministrators($argument);
        } elseif ($argument instanceof BotCommandScopeAllGroupChatsArgumentInterface) {
            return $this->serializeBotCommandScopeAllGroupChats($argument);
        } elseif ($argument instanceof BotCommandScopeAllPrivateChatsArgumentInterface) {
            return $this->serializeBotCommandScopeAllPrivateChats($argument);
        } elseif ($argument instanceof BotCommandScopeChatAdministratorsArgumentInterface) {
            return $this->serializeBotCommandScopeChatAdministrators($argument);
        } elseif ($argument instanceof BotCommandScopeChatArgumentInterface) {
            return $this->serializeBotCommandScopeChat($argument);
        } elseif ($argument instanceof BotCommandScopeChatMemberArgumentInterface) {
            return $this->serializeBotCommandScopeChatMember($argument);
        }

        throw new \InvalidArgumentException('Не удалось сериализовать объект.');
    }

    public function serializeBotCommandScopeDefault(BotCommandScopeDefaultArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();

        return $data;
    }

    public function serializeBotCommandScopeAllChatAdministrators(BotCommandScopeAllChatAdministratorsArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();

        return $data;
    }

    public function serializeBotCommandScopeAllGroupChats(BotCommandScopeAllGroupChatsArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();

        return $data;
    }

    public function serializeBotCommandScopeAllPrivateChats(BotCommandScopeAllPrivateChatsArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();

        return $data;
    }

    public function serializeBotCommandScopeChatAdministrators(BotCommandScopeChatAdministratorsArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();
        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();

        return $data;
    }

    public function serializeBotCommandScopeChat(BotCommandScopeChatArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();
        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();

        return $data;
    }

    public function serializeBotCommandScopeChatMember(BotCommandScopeChatMemberArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();
        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::USER_ID->value] = $argument->getUserId();

        return $data;
    }
}
