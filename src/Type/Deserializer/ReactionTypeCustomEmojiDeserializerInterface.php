<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeCustomEmojiInterface;

interface ReactionTypeCustomEmojiDeserializerInterface
{
    public function deserialize(array $data): ReactionTypeCustomEmojiInterface;
}
