<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReactionTypeEmojiArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ReactionTypeEmojiArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ReactionTypeEmojiArgumentInterface $argument): array;
}
