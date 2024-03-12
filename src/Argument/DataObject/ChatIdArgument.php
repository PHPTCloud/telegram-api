<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ChatIdArgument implements ChatIdArgumentInterface
{
    public function __construct(
        private readonly string|int|float $chatId,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }
}
