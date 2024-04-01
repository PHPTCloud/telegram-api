<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageTextArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface EditMessageTextArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(EditMessageTextArgumentInterface $argument): array;
}
