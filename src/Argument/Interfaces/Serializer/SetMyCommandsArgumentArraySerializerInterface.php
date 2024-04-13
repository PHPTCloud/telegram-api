<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyCommandsArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SetMyCommandsArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetMyCommandsArgumentInterface $argument): array;
}
