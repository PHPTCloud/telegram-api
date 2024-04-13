<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotNameInterface;

interface BotNameTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(string $name): BotNameInterface;
}
