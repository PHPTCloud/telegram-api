<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeInterface;

interface ReactionTypeTypeFactoryInterface
{
    public function create(string $type, ?string $emoji = null, ?string $customEmojiId = null): ReactionTypeInterface;
}
