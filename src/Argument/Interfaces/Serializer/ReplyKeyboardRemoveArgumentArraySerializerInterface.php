<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ReplyKeyboardRemoveArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ReplyKeyboardRemoveArgumentInterface $argument): array;
}
