<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatAdministratorRightsInterface;

interface ChatAdministratorRightsDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ChatAdministratorRightsInterface;
}
