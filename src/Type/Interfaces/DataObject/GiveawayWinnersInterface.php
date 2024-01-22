<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой сообщение о завершении розыгрыша с публичными победителями.
 *
 * @see    https://core.telegram.org/bots/api#giveawaywinners
 */
interface GiveawayWinnersInterface
{
    /**
     * Чат, который создал розыгрыш.
     */
    public function getChat(): ChatInterface;

    /**
     * Идентификатор сообщения с розыгрышем в чате.
     */
    public function getGiveawayMessageId(): int|float;

    /**
     * Момент времени (временная метка Unix), когда были выбраны победители розыгрыша.
     */
    public function getWinnersSelectionDate(): int;

    /**
     * Общее количество победителей розыгрыша.
     */
    public function getWinnerCount(): int;

    /**
     * Список до 100 победителей розыгрыша.
     *
     * @return UserInterface[]
     */
    public function getWinners(): array;

    /**
     * Необязательный. Количество других чатов, к которым пользователь должен был присоединиться, чтобы име
     * ть право на получение приза.
     */
    public function getAdditionalChatCount(): ?int;

    /**
     * Необязательный. Количество месяцев, в течение которых будет активна подписка Telegram Premium, выигр
     * анная в результате розыгрыша.
     */
    public function getPremiumSubscriptionMonthCount(): ?int;

    /**
     * Необязательный. Количество нераспределенных призов.
     */
    public function getUnclaimedPrizeCount(): ?int;

    /**
     * Необязательный. Правда, если бы на победу имели право только пользователи, присоединившиеся к чатам
     * после начала розыгрыша.
     */
    public function isOnlyNewMembers(): ?bool;

    /**
     * Необязательный. Правда, если розыгрыш отменили из-за возврата оплаты за него.
     */
    public function wasRefunded(): ?bool;

    /**
     * Необязательный. Описание дополнительного розыгрыша приза.
     */
    public function getPrizeDescription(): ?string;
}
