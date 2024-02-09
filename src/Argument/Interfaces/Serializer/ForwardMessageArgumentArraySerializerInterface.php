<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface ForwardMessageArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ForwardMessageArgumentInterface $argument): array;
}
