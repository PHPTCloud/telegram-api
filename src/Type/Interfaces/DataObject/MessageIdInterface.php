<?php

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
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
