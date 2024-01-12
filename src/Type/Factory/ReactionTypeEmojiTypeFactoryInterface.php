<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeEmojiInterface;

interface ReactionTypeEmojiTypeFactoryInterface
{
    public function create(string $type, string $emoji): ReactionTypeEmojiInterface;
}
