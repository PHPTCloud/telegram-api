<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SetMyDescriptionArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetMyDescriptionArgumentInterface $argument): array;
}
