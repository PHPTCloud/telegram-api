<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessagesArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface CopyMessagesArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(CopyMessagesArgumentInterface $argument): array;
}
