<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\ChatLocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\LocationInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface ChatLocationTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(LocationInterface $location, string $address): ChatLocationInterface;
}
