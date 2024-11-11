<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteChatStickerSetArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\DeleteChatStickerSetArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author Пешко Илья peshkoi@mail.ru
 */
class DeleteChatStickerSetArgumentArraySerializer implements DeleteChatStickerSetArgumentArraySerializerInterface
{
    public function serialize(DeleteChatStickerSetArgumentInterface $argument): array
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
