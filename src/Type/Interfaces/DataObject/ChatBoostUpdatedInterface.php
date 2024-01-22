<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой усиление, добавленное в чат или измененное.
 *
 * @see    https://core.telegram.org/bots/api#chatboostupdated
 */
interface ChatBoostUpdatedInterface
{
    /**
     * Чат, который был усилен.
     */
    public function getChat(): ChatInterface;

    /**
     * Информация о накрутке чата.
     */
    public function getBoost(): ChatBoostInterface;
}
