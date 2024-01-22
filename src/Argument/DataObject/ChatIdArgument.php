<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\ChatIdArgumentInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 */
class ChatIdArgument implements ChatIdArgumentInterface
{
    public function __construct(
        private readonly string|int|float $chatId,
    ) {}

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }
}
