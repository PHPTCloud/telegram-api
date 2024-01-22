<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageAutoDeleteTimerChangedInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение об изменении настроек таймера автоудаления.
 *
 * @see    https://core.telegram.org/bots/api#maybeinaccessiblemessage
 */
class MessageAutoDeleteTimerChanged implements MessageAutoDeleteTimerChangedInterface
{
    public function __construct(
        private readonly int $messageAutoDeleteTime,
    ) {
    }

    public function getMessageAutoDeleteTime(): int
    {
        return $this->messageAutoDeleteTime;
    }
}
