<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

interface ChatAdministratorRightsArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ChatAdministratorRightsArgumentInterface $argument): array;
}
