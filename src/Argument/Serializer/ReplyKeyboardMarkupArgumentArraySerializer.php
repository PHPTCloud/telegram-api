<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\KeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

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

        if ($argument->isPersistent() !== null) {
            $data[TelegramApiFieldEnum::IS_PERSISTENT->value] = $argument->isPersistent();
        }

        if ($argument->wantResizeKeyboard() !== null) {
            $data[TelegramApiFieldEnum::RESIZE_KEYBOARD->value] = $argument->wantResizeKeyboard();
        }

        if ($argument->isOneTimeKeyboard() !== null) {
            $data[TelegramApiFieldEnum::ONE_TIME_KEYBOARD->value] = $argument->isOneTimeKeyboard();
        }

        if ($argument->getInputFieldPlaceholder() !== null) {
            $data[TelegramApiFieldEnum::INPUT_FIELD_PLACEHOLDER->value] = $argument->getInputFieldPlaceholder();
        }

        if ($argument->isSelective() !== null) {
            $data[TelegramApiFieldEnum::SELECTIVE->value] = $argument->isSelective();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
