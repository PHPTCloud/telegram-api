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
        private string|int|float|null                                                                                            $chatId = null,
    ) {}

    public function getChatId(): float|int|string|null
    {
        return $this->chatId;
    }

    public function setChatId(float|int|string $chatId): void
    {
        $this->chatId = $chatId;
    }
}
