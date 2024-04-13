<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonWebAppArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MenuButtonWebAppArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\WebAppInfoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class MenuButtonWebAppArgumentArraySerializer implements MenuButtonWebAppArgumentArraySerializerInterface
{
    public function __construct(
        private readonly WebAppInfoArgumentArraySerializerInterface $webAppInfoArgumentArraySerializer,
    ) {
    }

    public function serialize(MenuButtonWebAppArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();
        $data[TelegramApiFieldEnum::TEXT->value] = $argument->getText();
        $data[TelegramApiFieldEnum::WEB_APP->value] = $this->webAppInfoArgumentArraySerializer->serialize($argument->getWebApp());

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
