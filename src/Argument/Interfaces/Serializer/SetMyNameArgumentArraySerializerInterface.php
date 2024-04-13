<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyNameArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SetMyNameArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetMyNameArgumentInterface $argument): array;
}
