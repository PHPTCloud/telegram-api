<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\BotDescription;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotDescriptionInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotDescriptionTypeFactoryInterface;

class BotDescriptionTypeFactory implements BotDescriptionTypeFactoryInterface
{
    public function create(string $description): BotDescriptionInterface
    {
        return new BotDescription($description);
    }
}
