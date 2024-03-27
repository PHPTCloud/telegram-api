<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetChatMemberArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Илья Пешко peshkoi@mail.ru
 */
class GetChatMemberArgumentArraySerializer implements GetChatMemberArgumentArraySerializerInterface
{
    public function serialize(GetChatMemberArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::USER_ID->value] = $argument->getUserId();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
