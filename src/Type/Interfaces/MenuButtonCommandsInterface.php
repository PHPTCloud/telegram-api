<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 *
 * Предоставляет кнопку меню, которая открывает список команд бота.
 * @link https://core.telegram.org/bots/api#menubuttoncommands
 */
interface MenuButtonCommandsInterface
{
    /**
     * Тип кнопки, должен быть 'commands'.
     *
     * @return string
     */
    public function getType(): string;
}
