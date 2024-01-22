<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ReactionTypeEmoji;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReactionTypeEmojiInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ReactionTypeEmojiTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class ReactionTypeEmojiTypeFactory implements ReactionTypeEmojiTypeFactoryInterface
{
    public function create(string $type, string $emoji): ReactionTypeEmojiInterface
    {
        return new ReactionTypeEmoji($type, $emoji);
    }
}
