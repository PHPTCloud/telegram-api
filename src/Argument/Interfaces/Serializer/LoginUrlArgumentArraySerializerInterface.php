<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LoginUrlArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface LoginUrlArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(LoginUrlArgumentInterface $argument): array;
}
