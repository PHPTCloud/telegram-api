<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaVideoArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface InputMediaVideoArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(InputMediaVideoArgumentInterface $argument): array;
}
