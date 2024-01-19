<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 */
class ChatIdIdArgumentArraySerializer implements ChatIdArgumentArraySerializerInterface
{
    public function serialize(ChatIdArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getChatId()) {
            $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
