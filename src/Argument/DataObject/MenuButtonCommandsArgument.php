<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonCommandsArgumentInterface;
use PHPTCloud\TelegramApi\Type\Enums\MenuButtonEnum;

class MenuButtonCommandsArgument implements MenuButtonCommandsArgumentInterface
{
    public function getType(): string
    {
        return MenuButtonEnum::COMMANDS->value;
    }
}
