<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой усиление, удаленное из чата.
 * @link    https://core.telegram.org/bots/api#chatboostremoved
 */
interface ChatBoostRemovedInterface
{
    /**
     * Чат, который был усилен.
     *
     * @return ChatInterface
     */
    public function getChat(): ChatInterface;

    /**
     * Уникальный идентификатор повышения.
     *
     * @return string
     */
    public function getBoostId(): string;

    /**
     * Момент времени (временная метка Unix), когда повышение было удалено.
     *
     * @return int
     */
    public function getRemoveDate(): int;

    /**
     * Источник убранного усиления.
     *
     * @return ChatBoostSourceInterface
     */
    public function getSource(): ChatBoostSourceInterface;
}
