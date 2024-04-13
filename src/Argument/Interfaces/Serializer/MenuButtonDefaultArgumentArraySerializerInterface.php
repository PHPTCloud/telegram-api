<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonDefaultArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface MenuButtonDefaultArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(MenuButtonDefaultArgumentInterface $argument): array;
}
