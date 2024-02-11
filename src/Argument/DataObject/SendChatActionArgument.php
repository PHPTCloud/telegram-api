<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;

class SendChatActionArgument implements SendChatActionArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly string $action,
        private readonly ?int $messageThreadId = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getAction(): string
    {
        return $this->action;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }
}
