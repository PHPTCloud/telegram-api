<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой усиление, добавленное в чат или измененное.
 * @link    https://core.telegram.org/bots/api#chatboostupdated
 */
interface ChatBoostUpdatedInterface
{
    /**
     * Чат, который был усилен.
     *
     * @return ChatInterface
     */
    public function getChat(): ChatInterface;

    /**
     * Информация о накрутке чата.
     *
     * @return ChatBoostInterface
     */
    public function getBoost(): ChatBoostInterface;
}
