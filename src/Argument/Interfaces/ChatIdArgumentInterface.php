<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @version 1.0.0
 */
interface ChatIdArgumentInterface
{
    public function getChatId(): float|int|string;
}
