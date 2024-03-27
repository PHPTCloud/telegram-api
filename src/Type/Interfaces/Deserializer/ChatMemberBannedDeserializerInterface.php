<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberBannedInterface;

/**
 * @author  Илья Пешко peshkoi@mail.ru
 */
interface ChatMemberBannedDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ChatMemberBannedInterface;
}
