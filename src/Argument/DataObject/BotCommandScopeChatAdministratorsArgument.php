<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\BotCommandScopeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeChatAdministratorsArgumentInterface;

class BotCommandScopeChatAdministratorsArgument implements BotCommandScopeChatAdministratorsArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
    ) {
    }

    public function getType(): string
    {
        return BotCommandScopeEnum::CHAT_ADMINISTRATORS->value;
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }
}
