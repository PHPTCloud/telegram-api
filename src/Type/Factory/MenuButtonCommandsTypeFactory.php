<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\MenuButtonCommands;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonCommandsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MenuButtonCommandsTypeFactoryInterface;

class MenuButtonCommandsTypeFactory implements MenuButtonCommandsTypeFactoryInterface
{
    public function create(): MenuButtonCommandsInterface
    {
        return new MenuButtonCommands();
    }
}
