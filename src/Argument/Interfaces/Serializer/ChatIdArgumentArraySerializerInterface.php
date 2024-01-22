<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * @version 1.0.0
 */
interface ChatIdArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ChatIdArgumentInterface $argument): array;
}
