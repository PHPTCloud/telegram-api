<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\Type\Interfaces\ChatPermissionsInterface;

interface ChatPermissionsDeserializerInterface
{
    public function deserialize(array $data): ChatPermissionsInterface;
}
