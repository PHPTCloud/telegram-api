<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\MenuButtonWebApp;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MenuButtonWebAppInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WebAppInfoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MenuButtonWebAppTypeFactoryInterface;

class MenuButtonWebAppTypeFactory implements MenuButtonWebAppTypeFactoryInterface
{
    public function create(string $text, WebAppInfoInterface $webApp): MenuButtonWebAppInterface
    {
        return new MenuButtonWebApp($text, $webApp);
    }
}
