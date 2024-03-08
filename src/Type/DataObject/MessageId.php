<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageIdInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет уникальный идентификатор сообщения.
 *
 * @see     https://core.telegram.org/bots/api#messageid
 */
class MessageId implements MessageIdInterface
{
    public function __construct(
        private readonly int $messageId,
    ) {
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
