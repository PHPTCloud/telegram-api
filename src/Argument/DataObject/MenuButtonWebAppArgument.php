<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MenuButtonWebAppArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\WebAppInfoArgumentInterface;
use PHPTCloud\TelegramApi\Type\Enums\MenuButtonEnum;

class MenuButtonWebAppArgument implements MenuButtonWebAppArgumentInterface
{
    public function __construct(
        private readonly string $text,
        private readonly WebAppInfoArgumentInterface $webApp,
    ) {
    }

    public function getType(): string
    {
        return MenuButtonEnum::WEB_APP->value;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getWebApp(): WebAppInfoArgumentInterface
    {
        return $this->webApp;
    }
}
