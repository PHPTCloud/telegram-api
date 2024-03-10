<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMessageReactionArgumentInterface;

class SetMessageReactionArgument implements SetMessageReactionArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly int $messageId,
        private readonly ?array $reaction = null,
        private readonly ?bool $big = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReaction(): ?array
    {
        return $this->reaction;
    }

    public function isBig(): ?bool
    {
        return $this->big;
    }
}
