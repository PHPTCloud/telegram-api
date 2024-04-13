<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandArgumentInterface;

class BotCommandArgument implements BotCommandArgumentInterface
{
    public function __construct(
        private readonly string $command,
        private readonly string $description,
    ) {
    }

    public function getCommand(): string
    {
        return $this->command;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
