<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetMyDefaultAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class GetMyDefaultAdministratorRightsArgumentArraySerializer implements GetMyDefaultAdministratorRightsArgumentArraySerializerInterface
{
    public function serialize(GetMyDefaultAdministratorRightsArgumentInterface $argument): array
    {
        $data = [];

        if (null !== $argument->isForChannels()) {
            $data[TelegramApiFieldEnum::FOR_CHANNELS->value] = $argument->isForChannels();
        }

        return $data;
    }
}
