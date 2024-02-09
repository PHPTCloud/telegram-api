<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessagesArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface ForwardMessagesArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ForwardMessagesArgumentInterface $argument): array;
}
