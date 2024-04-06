<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyDefaultAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SetMyDefaultAdministratorRightsArgumentArraySerializer implements SetMyDefaultAdministratorRightsArgumentArraySerializerInterface
{
    public function __construct(
        private readonly ChatAdministratorRightsArgumentArraySerializerInterface $chatAdministratorRightsArgumentArraySerializer,
    ) {
    }

    public function serialize(SetMyDefaultAdministratorRightsArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getRights()) {
            $data[TelegramApiFieldEnum::RIGHTS->value]
                = $this->chatAdministratorRightsArgumentArraySerializer->serialize($argument->getRights());
        }

        if ($argument->isForChannels() !== null) {
            $data[TelegramApiFieldEnum::FOR_CHANNELS->value] = $argument->isForChannels();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
