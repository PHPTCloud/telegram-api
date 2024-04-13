<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\BotName;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotNameInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotNameTypeFactoryInterface;

class BotNameTypeFactory implements BotNameTypeFactoryInterface
{
    public function create(string $name): BotNameInterface
    {
        return new BotName($name);
    }
}
