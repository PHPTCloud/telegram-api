<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author Пешко Илья peshkoi@mail.ru
 *
 * Предоставляет кнопку меню, которая открывает список команд бота.
 *
 * @see https://core.telegram.org/bots/api#menubuttoncommands
 */
interface MenuButtonCommandsInterface
{
    /**
     * Тип кнопки, должен быть 'commands'.
     */
    public function getType(): string;
}
