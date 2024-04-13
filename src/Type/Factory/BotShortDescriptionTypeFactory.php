<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\BotShortDescription;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotShortDescriptionInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotShortDescriptionTypeFactoryInterface;

class BotShortDescriptionTypeFactory implements BotShortDescriptionTypeFactoryInterface
{
    public function create(string $shortDescription): BotShortDescriptionInterface
    {
        return new BotShortDescription($shortDescription);
    }
}
