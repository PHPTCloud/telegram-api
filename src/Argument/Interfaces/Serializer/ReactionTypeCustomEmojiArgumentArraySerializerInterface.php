<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReactionTypeCustomEmojiArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ReactionTypeCustomEmojiArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ReactionTypeCustomEmojiArgumentInterface $argument): array;
}
