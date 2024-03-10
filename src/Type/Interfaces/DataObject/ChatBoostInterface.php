<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект содержит информацию о накрутке чата.
 *
 * @see    https://core.telegram.org/bots/api#chatboost
 */
interface ChatBoostInterface
{
    /**
     * Уникальный идентификатор повышения.
     */
    public function getBoostId(): string;

    /**
     * Момент времени (временная метка Unix), когда чат был усилен.
     */
    public function getAddDate(): int;

    /**
     * Момент времени (временная метка Unix), когда срок действия буста автоматически истечет, если только
     * подписка Telegram Premium бустера не будет продлена.
     */
    public function getExpirationDate(): int;

    /**
     * Источник дополнительного усиления.
     */
    public function getSource(): ChatBoostSourceInterface;
}
