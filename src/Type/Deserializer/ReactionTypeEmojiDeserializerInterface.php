<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeEmojiInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface ReactionTypeEmojiDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ReactionTypeEmojiInterface;
}
