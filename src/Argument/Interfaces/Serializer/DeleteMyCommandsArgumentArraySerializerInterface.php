<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMyCommandsArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface DeleteMyCommandsArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(DeleteMyCommandsArgumentInterface $argument): array;
}
