<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface BotCommandScopeArgumentInterface extends ArgumentInterface
{
    public function getType(): string;
}
