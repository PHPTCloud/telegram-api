<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\ChatLocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\LocationInterface;

interface ChatLocationTypeFactoryInterface
{
    public function create(LocationInterface $location, string $address): ChatLocationInterface;
}
