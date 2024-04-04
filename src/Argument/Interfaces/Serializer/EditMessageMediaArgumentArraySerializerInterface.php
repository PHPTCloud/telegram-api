<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageMediaArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface EditMessageMediaArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(EditMessageMediaArgumentInterface $argument): array;
}
