<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface MenuButtonDefaultArgumentInterface extends ArgumentInterface
{
    public function getType(): string;
}
