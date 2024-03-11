<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class InlineKeyboardMarkupArgumentArraySerializer implements InlineKeyboardMarkupArgumentArraySerializerInterface
{
    public function __construct(
        private readonly InlineKeyboardButtonArgumentArraySerializerInterface $inlineKeyboardButtonArgumentArraySerializer,
    ) {
    }

    public function serialize(InlineKeyboardMarkupArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::INLINE_KEYBOARD->value] = array_map(
            function (array $row) {
                return array_map(
                    function (InlineKeyboardButtonArgumentInterface $button) {
                        return $this->inlineKeyboardButtonArgumentArraySerializer->serialize($button);
                    },
                    $row,
                );
            },
            $argument->getInlineKeyboard(),
        );

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
