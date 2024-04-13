<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotShortDescriptionInterface;

interface BotShortDescriptionTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(string $shortDescription): BotShortDescriptionInterface;
}
