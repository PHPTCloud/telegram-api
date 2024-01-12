<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ReactionTypeCustomEmoji;
use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeCustomEmojiInterface;

class ReactionTypeCustomEmojiTypeFactory implements ReactionTypeCustomEmojiTypeFactoryInterface
{
    public function create(string $type, string $customEmojiId): ReactionTypeCustomEmojiInterface
    {
        return new ReactionTypeCustomEmoji($type, $customEmojiId);
    }
}
