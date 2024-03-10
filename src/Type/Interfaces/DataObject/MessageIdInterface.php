<?php

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет уникальный идентификатор сообщения.
 *
 * @see     https://core.telegram.org/bots/api#messageid
 */
interface MessageIdInterface
{
    /**
     * Уникальный идентификатор сообщения.
     */
    public function getMessageId(): int;
}
