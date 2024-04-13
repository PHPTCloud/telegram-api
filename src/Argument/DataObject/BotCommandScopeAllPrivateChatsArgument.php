<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\BotCommandScopeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeAllPrivateChatsArgumentInterface;

class BotCommandScopeAllPrivateChatsArgument implements BotCommandScopeAllPrivateChatsArgumentInterface
{
    public function getType(): string
    {
        return BotCommandScopeEnum::ALL_PRIVATE_CHATS->value;
    }
}
