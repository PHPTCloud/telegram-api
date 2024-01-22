<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface ChatIdArgumentInterface
{
    /**
     * Уникальный идентификатор целевого чата или имя пользователя целевой супергруппы или канала (в формат
     * е @channelusername).
     *
     * @return float|int|string
     */
    public function getChatId(): float|int|string;
}
