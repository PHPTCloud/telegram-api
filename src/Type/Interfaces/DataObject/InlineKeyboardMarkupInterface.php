<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой встроенную клавиатуру, которая появляется рядом с сообщением, котором
 * у он принадлежит.
 *
 * @see    https://core.telegram.org/bots/api#inlinekeyboardmarkup
 */
interface InlineKeyboardMarkupInterface
{
    /**
     * Массив строк кнопок, каждая из которых представлена массивом объектов InlineKeyboardButton.
     * Примечание: Это будет работать только в версиях Telegram, выпущенных после 9 апреля 2016 г. В старых кл
     * иентах будет отображаться неподдерживаемое сообщение.
     *
     * @see https://core.telegram.org/bots/api#inlinekeyboardbutton
     *
     * @return array<int, InlineKeyboardButtonInterface[]>
     */
    public function getInlineKeyboard(): array;
}
