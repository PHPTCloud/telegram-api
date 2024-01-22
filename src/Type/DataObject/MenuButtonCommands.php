<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Enums\MenuButtonEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonCommandsInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * @version 1.0.0
 *
 * Предоставляет кнопку меню, которая открывает список команд бота.
 *
 * @see    https://core.telegram.org/bots/api#menubuttoncommands
 */
class MenuButtonCommands implements MenuButtonCommandsInterface
{
    public function getType(): string
    {
        return MenuButtonEnum::COMMANDS->value;
    }
}
