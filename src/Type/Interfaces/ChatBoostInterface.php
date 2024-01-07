<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект содержит информацию о накрутке чата.
 * @link    https://core.telegram.org/bots/api#chatboost
 */
interface ChatBoostInterface
{
    /**
     * Уникальный идентификатор повышения.
     *
     * @return string
     */
    public function getBoostId(): string;

    /**
     * Момент времени (временная метка Unix), когда чат был усилен.
     *
     * @return int
     */
    public function getAddDate(): int;

    /**
     * Момент времени (временная метка Unix), когда срок действия буста автоматически истечет, если только
     * подписка Telegram Premium бустера не будет продлена.
     *
     * @return int
     */
    public function getExpirationDate(): int;

    /**
     * Источник дополнительного усиления.
     *
     * @return ChatBoostSourceInterface
     */
    public function getSource(): ChatBoostSourceInterface;
}
