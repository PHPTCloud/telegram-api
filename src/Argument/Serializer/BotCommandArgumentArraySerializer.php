<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BotCommandArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class BotCommandArgumentArraySerializer implements BotCommandArgumentArraySerializerInterface
{
    public function serialize(BotCommandArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::COMMAND->value] = $argument->getCommand();
        $data[TelegramApiFieldEnum::DESCRIPTION->value] = $argument->getDescription();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
