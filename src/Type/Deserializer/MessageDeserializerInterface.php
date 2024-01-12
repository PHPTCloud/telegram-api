<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface;

interface MessageDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): MessageInterface;
}
