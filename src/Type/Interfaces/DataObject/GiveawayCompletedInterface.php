<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение о завершении розыгрыша без публичных победителей.
 *
 * @see    https://core.telegram.org/bots/api#giveawaycompleted
 */
interface GiveawayCompletedInterface
{
    /**
     * Количество победителей в розыгрыше.
     */
    public function getWinnerCount(): int;

    /**
     * Необязательный. Количество нераспределенных призов.
     */
    public function getUnclaimedPrizeCount(): ?int;

    /**
     * Необязательный. Сообщение с пройденным розыгрышем, если оно не было удалено.
     */
    public function getGiveawayMessage(): ?MessageInterface;
}
