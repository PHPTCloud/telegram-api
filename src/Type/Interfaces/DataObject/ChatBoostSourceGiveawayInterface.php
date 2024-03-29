<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Повышение было получено за счет создания розыгрыша Telegram Premium. Это прокачивает чат в 4 раза за
 * время действия соответствующей подписки Telegram Premium.
 *
 * @see    https://core.telegram.org/bots/api#chatboostsourcegiveaway
 */
interface ChatBoostSourceGiveawayInterface extends ChatBoostSourceInterface
{
    /**
     * Идентификатор сообщения в чате с розыгрышем; сообщение могло быть уже удалено. Может быть 0, если со
     * общение еще не отправлено.
     */
    public function getGiveawayMessageId(): int;

    /**
     * Необязательный. Правда, если розыгрыш состоялся, но не нашлось пользователя, выигравшего приз.
     */
    public function isUnclaimed(): ?bool;
}
