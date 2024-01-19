<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 */
interface ChatIdArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(ChatIdArgumentInterface $argument): array;
}
