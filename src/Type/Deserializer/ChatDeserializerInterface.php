<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatInterface;

interface ChatDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ChatInterface;
}
