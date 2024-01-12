<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\Type\Interfaces\LocationInterface;

interface LocationDeserializerInterface
{
    public function deserialize(array $data): LocationInterface;
}
