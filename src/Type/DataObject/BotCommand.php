<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotCommandInterface;

class BotCommand implements BotCommandInterface
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
