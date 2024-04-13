<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotDescriptionInterface;

class BotDescription implements BotDescriptionInterface
{
    public function __construct(
        private readonly string $description,
    ) {
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}
