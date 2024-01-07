<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Повышение было получено за счет создания розыгрыша Telegram Premium. Это прокачивает чат в 4 раза за
 * время действия соответствующей подписки Telegram Premium.
 * @link    https://core.telegram.org/bots/api#chatboostsourcegiveaway
 */
interface ChatBoostSourceGiveawayInterface extends ChatBoostSourceInterface
{
    /**
     * Идентификатор сообщения в чате с розыгрышем; сообщение могло быть уже удалено. Может быть 0, если со
     * общение еще не отправлено.
     *
     * @return int
     */
    public function getGiveawayMessageId(): int;

    /**
     * Необязательный. Правда, если розыгрыш состоялся, но не нашлось пользователя, выигравшего приз.
     *
     * @return bool|null
     */
    public function isUnclaimed(): ?bool;
}
