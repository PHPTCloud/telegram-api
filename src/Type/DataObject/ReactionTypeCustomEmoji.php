<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReactionTypeCustomEmojiInterface;

class ReactionTypeCustomEmoji implements ReactionTypeCustomEmojiInterface
{
    public function __construct(
        private readonly string $type,
        private readonly string $customEmojiId,
    ) {}

    public function getType(): string
    {
        return $this->type;
    }

    public function getCustomEmojiId(): string
    {
        return $this->customEmojiId;
    }
}
