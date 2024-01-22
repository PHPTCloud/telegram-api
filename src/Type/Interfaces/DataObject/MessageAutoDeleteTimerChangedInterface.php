<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение об изменении настроек таймера автоудаления.
 *
 * @see    https://core.telegram.org/bots/api#messageautodeletetimerchanged
 */
interface MessageAutoDeleteTimerChangedInterface
{
    /**
     * Новое время автоудаления сообщений в чате; в секундах.
     */
    public function getMessageAutoDeleteTime(): int;
}
