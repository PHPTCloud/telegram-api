<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GiveawayInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет собой сообщение о запланированной раздаче подарков.
 *
 * @see    https://core.telegram.org/bots/api#giveaway
 */
class Giveaway implements GiveawayInterface
{
    public function __construct(
        private readonly array $chats,
        private readonly int $winnersSelectionDate,
        private readonly int $winnerCount,
        private readonly ?bool $onlyNewMembers = null,
        private readonly ?bool $publicWinners = null,
        private readonly ?string $prizeDescription = null,
        private readonly ?array $countryCodes = null,
        private readonly ?int $premiumSubscriptionMonthCount = null,
    ) {
    }

    public function getChats(): array
    {
        return $this->chats;
    }

    public function getWinnersSelectionDate(): int
    {
        return $this->winnersSelectionDate;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function isOnlyNewMembers(): ?bool
    {
        return $this->onlyNewMembers;
    }

    public function hasPublicWinners(): ?bool
    {
        return $this->publicWinners;
    }

    public function getPrizeDescription(): ?string
    {
        return $this->prizeDescription;
    }

    public function getCountryCodes(): ?array
    {
        return $this->countryCodes;
    }

    public function getPremiumSubscriptionMonthCount(): ?int
    {
        return $this->premiumSubscriptionMonthCount;
    }
}
