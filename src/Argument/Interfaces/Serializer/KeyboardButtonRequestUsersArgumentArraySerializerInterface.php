<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonRequestUsersArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface KeyboardButtonRequestUsersArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(KeyboardButtonRequestUsersArgumentInterface $argument): array;
}
