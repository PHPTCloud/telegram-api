<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyNameArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface GetMyNameArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(GetMyNameArgumentInterface $argument): array;
}
