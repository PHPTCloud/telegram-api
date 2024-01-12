<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ReactionTypeEmoji;
use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeEmojiInterface;

class ReactionTypeEmojiTypeFactory implements ReactionTypeEmojiTypeFactoryInterface
{
    public function create(string $type, string $emoji): ReactionTypeEmojiInterface
    {
        return new ReactionTypeEmoji($type, $emoji);
    }
}
