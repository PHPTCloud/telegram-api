<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeEmojiInterface;

class ReactionTypeEmoji implements ReactionTypeEmojiInterface
{
    public function __construct(
        private readonly string $type,
        private readonly string $emoji,
    ) {}

    public function getType(): string
    {
        return $this->type;
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }
}
