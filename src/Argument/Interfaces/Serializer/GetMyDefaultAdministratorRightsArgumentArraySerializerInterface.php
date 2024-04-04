<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface GetMyDefaultAdministratorRightsArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(GetMyDefaultAdministratorRightsArgumentInterface $argument): array;
}
