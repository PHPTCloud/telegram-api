<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * @version 1.0.0
 */
interface SetChatDescriptionArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(SetChatDescriptionArgumentInterface $argument): array;
}
