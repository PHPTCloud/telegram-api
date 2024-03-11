<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardRemoveArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ReplyKeyboardRemoveArgumentArraySerializer implements ReplyKeyboardRemoveArgumentArraySerializerInterface
{
    public function serialize(ReplyKeyboardRemoveArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::REMOVE_KEYBOARD->value] = $argument->wantRemoveKeyboard();

        if (null !== $argument->isSelective()) {
            $data[TelegramApiFieldEnum::SELECTIVE->value] = $argument->isSelective();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
