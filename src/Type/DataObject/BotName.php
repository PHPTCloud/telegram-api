<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotNameInterface;

class BotName implements BotNameInterface
{
    public function __construct(
        private readonly string $name,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }
}
