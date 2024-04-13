<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonDefaultArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MenuButtonDefaultArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class MenuButtonDefaultArgumentArraySerializer implements MenuButtonDefaultArgumentArraySerializerInterface
{
    public function serialize(MenuButtonDefaultArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
