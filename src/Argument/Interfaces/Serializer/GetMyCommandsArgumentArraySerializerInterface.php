<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyCommandsArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface GetMyCommandsArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(GetMyCommandsArgumentInterface $argument): array;
}
