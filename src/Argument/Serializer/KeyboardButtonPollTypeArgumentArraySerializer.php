<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonPollTypeArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonPollTypeArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class KeyboardButtonPollTypeArgumentArraySerializer implements KeyboardButtonPollTypeArgumentArraySerializerInterface
{
    public function serialize(KeyboardButtonPollTypeArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
