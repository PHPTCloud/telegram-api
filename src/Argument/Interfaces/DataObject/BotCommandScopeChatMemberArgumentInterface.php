<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface BotCommandScopeChatMemberArgumentInterface extends BotCommandScopeArgumentInterface
{
    public function getChatId(): int|float|string;

    public function getUserId(): int|float;
}
