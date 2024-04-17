<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendContactArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SendContactArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendContactArgumentInterface $argument): array;
}
