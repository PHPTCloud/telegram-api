<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\Type\Interfaces\ChatPhotoInterface;

interface ChatPhotoDeserializerInterface
{
    public function deserialize(array $data): ChatPhotoInterface;
}
