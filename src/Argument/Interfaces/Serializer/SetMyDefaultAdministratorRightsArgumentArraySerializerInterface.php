<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface SetMyDefaultAdministratorRightsArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetMyDefaultAdministratorRightsArgumentInterface $argument): array;
}
