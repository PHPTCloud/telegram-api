<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotShortDescriptionInterface;

class BotShortDescription implements BotShortDescriptionInterface
{
    public function __construct(
        private readonly string $shortDescription,
    ) {
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }
}
