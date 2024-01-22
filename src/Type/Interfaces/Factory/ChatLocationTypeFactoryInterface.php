<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatLocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LocationInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
interface ChatLocationTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(LocationInterface $location, string $address): ChatLocationInterface;
}
