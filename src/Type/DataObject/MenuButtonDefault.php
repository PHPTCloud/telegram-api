<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Enums\MenuButtonEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonDefaultInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 *
 * Поясняет, что для кнопки меню не было задано конкретное значение.
 * @link    https://core.telegram.org/bots/api#menubuttondefault
 */
class MenuButtonDefault implements MenuButtonDefaultInterface
{
    public function getType(): string
    {
        return MenuButtonEnum::DEFAULT->value;
    }
}
