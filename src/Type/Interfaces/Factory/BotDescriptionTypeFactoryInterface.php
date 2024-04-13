<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotDescriptionInterface;

interface BotDescriptionTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(string $description): BotDescriptionInterface;
}
