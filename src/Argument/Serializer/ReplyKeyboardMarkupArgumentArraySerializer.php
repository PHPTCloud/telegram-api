<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ReplyKeyboardMarkupArgumentArraySerializer implements ReplyKeyboardMarkupArgumentArraySerializerInterface
{
    public function __construct(
        private readonly KeyboardButtonArgumentArraySerializerInterface $keyboardButtonArgumentArraySerializer,
    ) {
    }

    public function serialize(ReplyKeyboardMarkupArgumentInterface $argument): array
    {
        $data = [];

        $buttons = [];
        foreach ($argument->getKeyboard() as $row) {
            $buttons[] = array_map(function (KeyboardButtonArgumentInterface $button) {
                return $this->keyboardButtonArgumentArraySerializer->serialize($button);
            }, $row);
        }
        $data[TelegramApiFieldEnum::KEYBOARD->value] = $buttons;

        if (null !== $argument->isPersistent()) {
            $data[TelegramApiFieldEnum::IS_PERSISTENT->value] = $argument->isPersistent();
        }

        if (null !== $argument->wantResizeKeyboard()) {
            $data[TelegramApiFieldEnum::RESIZE_KEYBOARD->value] = $argument->wantResizeKeyboard();
        }

        if (null !== $argument->isOneTimeKeyboard()) {
            $data[TelegramApiFieldEnum::ONE_TIME_KEYBOARD->value] = $argument->isOneTimeKeyboard();
        }

        if (null !== $argument->getInputFieldPlaceholder()) {
            $data[TelegramApiFieldEnum::INPUT_FIELD_PLACEHOLDER->value] = $argument->getInputFieldPlaceholder();
        }

        if (null !== $argument->isSelective()) {
            $data[TelegramApiFieldEnum::SELECTIVE->value] = $argument->isSelective();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
