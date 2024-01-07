<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение о завершении розыгрыша без публичных победителей.
 * @link    https://core.telegram.org/bots/api#giveawaycompleted
 */
interface GiveawayCompletedInterface
{
    /**
     * Количество победителей в розыгрыше.
     *
     * @return int
     */
    public function getWinnerCount(): int;

    /**
     * Необязательный. Количество нераспределенных призов.
     *
     * @return int|null
     */
    public function getUnclaimedPrizeCount(): ?int;

    /**
     * Необязательный. Сообщение с пройденным розыгрышем, если оно не было удалено.
     *
     * @return MessageInterface|null
     */
    public function getGiveawayMessage(): ?MessageInterface;
}
