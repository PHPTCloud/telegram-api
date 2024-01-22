<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;
/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение об окончании видеочата в чате.
 * @link    https://core.telegram.org/bots/api#videochatended
 */
interface VideoChatEndedInterface
{
    /**
     * Продолжительность видеочата в секундах.
     *
     * @return int
     */
    public function getDuration(): int;
}
