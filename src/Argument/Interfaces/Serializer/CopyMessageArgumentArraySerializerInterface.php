<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessageArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface CopyMessageArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(CopyMessageArgumentInterface $argument): array;
}
