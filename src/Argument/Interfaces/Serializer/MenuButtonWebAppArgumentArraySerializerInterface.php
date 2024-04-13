<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonWebAppArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface MenuButtonWebAppArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(MenuButtonWebAppArgumentInterface $argument): array;
}
