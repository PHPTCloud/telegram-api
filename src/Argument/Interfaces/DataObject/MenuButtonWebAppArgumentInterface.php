<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface MenuButtonWebAppArgumentInterface extends ArgumentInterface
{
    public function getType(): string;

    public function getText(): string;

    public function getWebApp(): WebAppInfoArgumentInterface;
}
