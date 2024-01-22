<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author Пешко Илья peshkoi@mail.ru
 *
 * @version 1.0.0
 *
 * Поясняет, что для кнопки меню не было задано конкретное значение.
 *
 * @see https://core.telegram.org/bots/api#menubuttondefault
 */
interface MenuButtonDefaultInterface
{
    /**
     * Тип кнопки, должен быть 'default'.
     */
    public function getType(): string;
}
