<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatTitleArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
interface SetChatTitleArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetChatTitleArgumentInterface $argument): array;
}
