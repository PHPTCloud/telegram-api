<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReactionTypeCustomEmojiInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
interface ReactionTypeCustomEmojiDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ReactionTypeCustomEmojiInterface;
}
