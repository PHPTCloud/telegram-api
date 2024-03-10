<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой усиление, удаленное из чата.
 *
 * @see    https://core.telegram.org/bots/api#chatboostremoved
 */
interface ChatBoostRemovedInterface
{
    /**
     * Чат, который был усилен.
     */
    public function getChat(): ChatInterface;

    /**
     * Уникальный идентификатор повышения.
     */
    public function getBoostId(): string;

    /**
     * Момент времени (временная метка Unix), когда повышение было удалено.
     */
    public function getRemoveDate(): int;

    /**
     * Источник убранного усиления.
     */
    public function getSource(): ChatBoostSourceInterface;
}
