<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteChatStickerSetArgumentInterface;
use PHPTCloud\TelegramApi\SerializerInterface;

/**
 * @author Пешко Илья peshkoi@mail.ru
 */
interface DeleteChatStickerSetArgumentArraySerializerInterface extends SerializerInterface
{
    public function serialize(DeleteChatStickerSetArgumentInterface $argument): array;
}
