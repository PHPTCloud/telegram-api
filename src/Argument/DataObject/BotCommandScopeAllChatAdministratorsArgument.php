<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\BotCommandScopeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeAllChatAdministratorsArgumentInterface;

class BotCommandScopeAllChatAdministratorsArgument implements BotCommandScopeAllChatAdministratorsArgumentInterface
{
    public function getType(): string
    {
        return BotCommandScopeEnum::ALL_CHAT_ADMINISTRATORS->value;
    }
}
