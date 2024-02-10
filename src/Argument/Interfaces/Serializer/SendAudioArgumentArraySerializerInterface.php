<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendAudioArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SendAudioArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SendAudioArgumentInterface $argument): array;
}
