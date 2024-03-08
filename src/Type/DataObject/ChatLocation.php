<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatLocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LocationInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Представляет расположение, к которому подключен чат.
 *
 * @see    https://core.telegram.org/bots/api#chatlocation
 */
class ChatLocation implements ChatLocationInterface
{
    public function __construct(
        private readonly LocationInterface $location,
        private readonly string $address,
    ) {
    }

    public function getLocation(): LocationInterface
    {
        return $this->location;
    }

    public function getAddress(): string
    {
        return $this->address;
    }
}
