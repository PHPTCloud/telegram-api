<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Enums\BotCommandScopeEnum;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandScopeChatMemberArgumentInterface;

class BotCommandScopeChatMemberArgument implements BotCommandScopeChatMemberArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly int|float $userId,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getUserId(): float|int
    {
        return $this->userId;
    }

    public function getType(): string
    {
        return BotCommandScopeEnum::CHAT_MEMBER->value;
    }
}
