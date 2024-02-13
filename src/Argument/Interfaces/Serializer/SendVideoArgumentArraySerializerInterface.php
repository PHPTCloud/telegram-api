<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVideoArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SendVideoArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendVideoArgumentInterface $argument): array;
}
