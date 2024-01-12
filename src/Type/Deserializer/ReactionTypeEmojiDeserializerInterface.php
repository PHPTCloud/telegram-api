<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeEmojiInterface;

interface ReactionTypeEmojiDeserializerInterface
{
    public function deserialize(array $data): ReactionTypeEmojiInterface;
}
