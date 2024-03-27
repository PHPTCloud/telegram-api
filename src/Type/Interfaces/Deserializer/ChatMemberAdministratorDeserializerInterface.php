<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberAdministratorInterface;

/**
 * @author  Илья Пешко peshkoi@mail.ru
 */
interface ChatMemberAdministratorDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ChatMemberAdministratorInterface;
}
