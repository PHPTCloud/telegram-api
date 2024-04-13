<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\BotCommand;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotCommandInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotCommandTypeFactoryInterface;

class BotCommandTypeFactory implements BotCommandTypeFactoryInterface
{
    public function create(string $command, string $description): BotCommandInterface
    {
        return new BotCommand($command, $description);
    }
}
