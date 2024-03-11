<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface InlineKeyboardButtonArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(InlineKeyboardButtonArgumentInterface $argument): array;
}
