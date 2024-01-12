<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatLocation;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatLocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\LocationInterface;

class ChatLocationTypeFactory implements ChatLocationTypeFactoryInterface
{
    public function create(LocationInterface $location, string $address): ChatLocationInterface
    {
        return new ChatLocation($location, $address);
    }
}
