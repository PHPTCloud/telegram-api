<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой служебное сообщение о запланированном в чате видеочате.
 *
 * @see    https://core.telegram.org/bots/api#videochatscheduled
 */
interface VideoChatScheduledInterface
{
    /**
     * Момент времени (временная метка Unix), когда администратор чата должен запустить видеочат.
     */
    public function getStartDate(): int;
}
