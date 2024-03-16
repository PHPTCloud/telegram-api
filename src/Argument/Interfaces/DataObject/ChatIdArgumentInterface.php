<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ChatIdArgumentInterface extends ArgumentInterface
{
    /**
     * Уникальный идентификатор целевого чата или имя пользователя целевой супергруппы или канала (в формат
     * е @channelusername).
     */
    public function getChatId(): float|int|string;
}
