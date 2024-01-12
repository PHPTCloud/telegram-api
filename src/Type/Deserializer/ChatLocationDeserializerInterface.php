<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\Type\Interfaces\ChatLocationInterface;

interface ChatLocationDeserializerInterface
{
    public function deserialize(array $data): ChatLocationInterface;
}
