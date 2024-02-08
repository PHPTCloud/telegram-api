<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface KeyboardButtonArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(KeyboardButtonArgumentInterface $argument): array;
}
