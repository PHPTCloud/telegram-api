<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonCommandsInterface;

interface MenuButtonCommandsTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(): MenuButtonCommandsInterface;
}
