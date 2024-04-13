<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\BotCommandScopeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeDefaultArgumentInterface;

class BotCommandScopeDefaultArgument implements BotCommandScopeDefaultArgumentInterface
{
    public function getType(): string
    {
        return BotCommandScopeEnum::DEFAULT->value;
    }
}
