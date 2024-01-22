<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой сообщение о запланированной раздаче подарков.
 *
 * @see    https://core.telegram.org/bots/api#giveaway
 */
interface GiveawayInterface
{
    /**
     * Список чатов, к которым пользователь должен присоединиться, чтобы принять участие в розыгрыше.
     *
     * @return ChatInterface[]
     */
    public function getChats(): array;

    /**
     * Момент времени (временная метка Unix), когда будут выбраны победители розыгрыша.
     */
    public function getWinnersSelectionDate(): int;

    /**
     * Количество пользователей, которые должны быть выбраны победителями розыгрыша.
     */
    public function getWinnerCount(): int;

    /**
     * Необязательный. Правда, если только те пользователи, которые присоединяются к чатам после начала роз
     * ыгрыша, должны иметь право на победу.
     */
    public function isOnlyNewMembers(): ?bool;

    /**
     * Необязательный. Правда, если список победителей розыгрыша будет виден всем.
     */
    public function hasPublicWinners(): ?bool;

    /**
     * Необязательный. Описание дополнительного розыгрыша приза.
     */
    public function getPrizeDescription(): ?string;

    /**
     * Необязательный. Список двухбуквенных кодов стран ISO 3166-1 альфа-2, указывающих страны, из которых
     * должны прибыть пользователи, имеющие право на участие в розыгрыше призов. Если пусто, то в розыгрыше
     * могут участвовать все пользователи. Пользователи, у которых номер телефона был куплен на Fragment,
     * всегда могут участвовать в розыгрышах.
     *
     * @see https://ru.wikipedia.org/wiki/ISO_3166-1_alpha-2
     */
    public function getCountryCodes(): ?array;

    /**
     * Необязательный. Количество месяцев, в течение которых будет активна подписка Telegram Premium, выигр
     * анная в результате розыгрыша.
     */
    public function getPremiumSubscriptionMonthCount(): ?int;
}
