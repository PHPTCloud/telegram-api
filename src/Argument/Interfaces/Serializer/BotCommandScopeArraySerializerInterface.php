<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeAllChatAdministratorsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeAllGroupChatsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeAllPrivateChatsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeChatAdministratorsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeChatArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeDefaultArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface BotCommandScopeArraySerializerInterface extends SerializerInterface
{
    public function serialize(BotCommandScopeArgumentInterface $argument): array;

    public function serializeBotCommandScopeDefault(BotCommandScopeDefaultArgumentInterface $argument): array;

    public function serializeBotCommandScopeAllChatAdministrators(BotCommandScopeAllChatAdministratorsArgumentInterface $argument): array;

    public function serializeBotCommandScopeAllGroupChats(BotCommandScopeAllGroupChatsArgumentInterface $argument): array;

    public function serializeBotCommandScopeAllPrivateChats(BotCommandScopeAllPrivateChatsArgumentInterface $argument): array;

    public function serializeBotCommandScopeChatAdministrators(BotCommandScopeChatAdministratorsArgumentInterface $argument): array;

    public function serializeBotCommandScopeChat(BotCommandScopeChatArgumentInterface $argument): array;

    public function serializeBotCommandScopeChatMember(BotCommandScopeChatMemberArgumentInterface $argument): array;
}
