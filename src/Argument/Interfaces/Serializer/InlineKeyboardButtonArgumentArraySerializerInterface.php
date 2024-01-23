<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface InlineKeyboardButtonArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(InlineKeyboardButtonArgumentInterface $argument): array;
}
