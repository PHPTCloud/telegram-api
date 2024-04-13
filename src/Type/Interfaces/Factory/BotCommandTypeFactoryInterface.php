<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotCommandInterface;

interface BotCommandTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(string $command, string $description): BotCommandInterface;
}
