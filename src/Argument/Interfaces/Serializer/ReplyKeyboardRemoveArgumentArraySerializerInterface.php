<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface ReplyKeyboardRemoveArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ReplyKeyboardRemoveArgumentInterface $argument): array;
}
