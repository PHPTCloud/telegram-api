<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Deserializer;

use PHPTCloud\TelegramApi\DeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberInterface;

/**
 * @author  Илья Пешко peshkoi@mail.ru
 */
interface ChatMemberDeserializerInterface extends DeserializerInterface
{
    public function deserialize(array $data): ChatMemberInterface;
}
