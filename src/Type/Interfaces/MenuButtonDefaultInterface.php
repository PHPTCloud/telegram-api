<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 *
 * Поясняет, что для кнопки меню не было задано конкретное значение.
 * @link https://core.telegram.org/bots/api#menubuttondefault
 */
interface MenuButtonDefaultInterface
{
    /**
     * Тип кнопки, должен быть 'default'.
     *
     * @return string
     */
    public function getType(): string;
}
