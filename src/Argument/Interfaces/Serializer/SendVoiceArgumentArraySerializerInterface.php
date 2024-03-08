<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVoiceArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SendVoiceArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendVoiceArgumentInterface $argument): array;
}
