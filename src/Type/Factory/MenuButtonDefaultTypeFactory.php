<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\MenuButtonDefault;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonDefaultInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MenuButtonDefaultTypeFactoryInterface;

class MenuButtonDefaultTypeFactory implements MenuButtonDefaultTypeFactoryInterface
{
    public function create(): MenuButtonDefaultInterface
    {
        return new MenuButtonDefault();
    }
}
