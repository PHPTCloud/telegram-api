<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface GetMyDescriptionArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(GetMyDescriptionArgumentInterface $argument): array;
}
