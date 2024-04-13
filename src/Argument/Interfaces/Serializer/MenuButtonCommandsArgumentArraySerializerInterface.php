<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonCommandsArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface MenuButtonCommandsArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(MenuButtonCommandsArgumentInterface $argument): array;
}
