<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonRequestChatArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface KeyboardButtonRequestChatArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(KeyboardButtonRequestChatArgumentInterface $argument): array;
}
