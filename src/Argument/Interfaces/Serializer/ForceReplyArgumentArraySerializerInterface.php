<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface ForceReplyArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ForceReplyArgumentInterface $argument): array;
}
