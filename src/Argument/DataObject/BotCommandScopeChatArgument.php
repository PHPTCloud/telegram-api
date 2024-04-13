<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\BotCommandScopeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeChatArgumentInterface;

class BotCommandScopeChatArgument implements BotCommandScopeChatArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
    ) {
    }

    public function getType(): string
    {
        return BotCommandScopeEnum::CHAT->value;
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }
}
