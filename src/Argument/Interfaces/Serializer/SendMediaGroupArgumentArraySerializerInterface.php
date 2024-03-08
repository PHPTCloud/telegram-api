<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendMediaGroupArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SendMediaGroupArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendMediaGroupArgumentInterface $argument): array;
}
