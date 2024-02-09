<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Используйте этот метод для пересылки нескольких сообщений любого типа. Если некоторые из указанных с
 * ообщений не удается найти или переслать, они пропускаются. Служебные сообщения и сообщения с защищен
 * ным содержимым пересылаться не могут. Группировка альбомов сохраняется для пересылаемых сообщений. В
 * случае успеха возвращается массив MessageId отправленных сообщений.
 *
 * @see     https://core.telegram.org/bots/api#forwardmessages
 */
interface ForwardMessagesArgumentInterface extends ForwardMessageArgumentInterface
{
    /**
     * Идентификаторы 1-100 сообщений в чате from_chat_id для пересылки. Идентификаторы необходимо указыват
     * ь в строго возрастающем порядке.
     *
     * @return int[]
     */
    public function getMessageIds(): array;
}
