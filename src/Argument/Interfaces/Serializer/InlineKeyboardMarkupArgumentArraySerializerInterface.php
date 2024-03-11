<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface InlineKeyboardMarkupArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(InlineKeyboardMarkupArgumentInterface $argument): array;
}
