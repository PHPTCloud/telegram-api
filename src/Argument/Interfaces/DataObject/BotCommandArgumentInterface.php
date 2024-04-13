<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface BotCommandArgumentInterface extends ArgumentInterface
{
    public function getCommand(): string;

    public function getDescription(): string;
}
