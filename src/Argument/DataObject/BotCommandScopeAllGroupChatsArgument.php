<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\BotCommandScopeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeAllGroupChatsArgumentInterface;

class BotCommandScopeAllGroupChatsArgument implements BotCommandScopeAllGroupChatsArgumentInterface
{
    public function getType(): string
    {
        return BotCommandScopeEnum::ALL_GROUP_CHATS->value;
    }
}
