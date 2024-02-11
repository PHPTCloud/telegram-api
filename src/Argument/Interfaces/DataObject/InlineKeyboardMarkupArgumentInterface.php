<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой встроенную клавиатуру, которая появляется рядом с сообщением, котором
 * у он принадлежит.
 *
 * @see     https://core.telegram.org/bots/api#inlinekeyboardmarkup
 */
interface InlineKeyboardMarkupArgumentInterface extends ArgumentInterface
{
    /**
     * @return InlineKeyboardButtonArgumentInterface[][]
     */
    public function getInlineKeyboard(): array;
}
