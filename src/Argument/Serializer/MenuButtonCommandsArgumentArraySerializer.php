<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonCommandsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MenuButtonCommandsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class MenuButtonCommandsArgumentArraySerializer implements MenuButtonCommandsArgumentArraySerializerInterface
{
    public function serialize(MenuButtonCommandsArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
