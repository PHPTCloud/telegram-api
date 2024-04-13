<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface BotCommandScopeChatAdministratorsArgumentInterface extends BotCommandScopeArgumentInterface
{
    public function getChatId(): int|float|string;
}
