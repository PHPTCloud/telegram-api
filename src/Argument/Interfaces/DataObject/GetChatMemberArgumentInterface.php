<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface GetChatMemberArgumentInterface extends ArgumentInterface
{
    /**
     * Уникальный идентификатор целевой группы или имя пользователя целевой супергруппы или канала (в форма
     * те @channelusername).
     */
    public function getChatId(): int|float|string;

    /**
     * Уникальный идентификатор целевого пользователя.
     */
    public function getUserId(): int|float;
}
