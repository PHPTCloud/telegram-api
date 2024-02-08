<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface ReplyKeyboardMarkupArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ReplyKeyboardMarkupArgumentInterface $argument): array;
}
