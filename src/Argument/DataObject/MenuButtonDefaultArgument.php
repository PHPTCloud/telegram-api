<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonDefaultArgumentInterface;
use PHPTCloud\TelegramApi\Type\Enums\MenuButtonEnum;

class MenuButtonDefaultArgument implements MenuButtonDefaultArgumentInterface
{
    public function getType(): string
    {
        return MenuButtonEnum::DEFAULT->value;
    }
}
