<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface MenuButtonCommandsArgumentInterface extends ArgumentInterface
{
    public function getType(): string;
}
