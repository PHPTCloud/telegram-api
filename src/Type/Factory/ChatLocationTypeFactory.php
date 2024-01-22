<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatLocation;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatLocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatLocationTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class ChatLocationTypeFactory implements ChatLocationTypeFactoryInterface
{
    public function create(LocationInterface $location, string $address): ChatLocationInterface
    {
        return new ChatLocation($location, $address);
    }
}
