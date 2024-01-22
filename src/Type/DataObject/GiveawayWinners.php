<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GiveawayWinnersInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой сообщение о завершении розыгрыша с публичными победителями.
 *
 * @see    https://core.telegram.org/bots/api#giveawaywinners
 */
class GiveawayWinners implements GiveawayWinnersInterface
{
    public function __construct(
        private readonly ChatInterface $chat,
        private readonly int|float $giveawayMessageId,
        private readonly int $winnersSelectionDate,
        private readonly int $winnerCount,
        private readonly array $winners,
        private readonly ?int $additionalChatCount = null,
        private readonly ?int $premiumSubscriptionMonthCount = null,
        private readonly ?int $unclaimedPrizeCount = null,
        private readonly ?bool $onlyNewMembers = null,
        private readonly ?bool $refunded = null,
        private readonly ?string $prizeDescription = null,
    ) {
    }

    public function getChat(): ChatInterface
    {
        return $this->chat;
    }

    public function getGiveawayMessageId(): float|int
    {
        return $this->giveawayMessageId;
    }

    public function getWinnersSelectionDate(): int
    {
        return $this->winnersSelectionDate;
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function getWinners(): array
    {
        return $this->winners;
    }

    public function getAdditionalChatCount(): ?int
    {
        return $this->additionalChatCount;
    }

    public function getPremiumSubscriptionMonthCount(): ?int
    {
        return $this->premiumSubscriptionMonthCount;
    }

    public function getUnclaimedPrizeCount(): ?int
    {
        return $this->unclaimedPrizeCount;
    }

    public function isOnlyNewMembers(): ?bool
    {
        return $this->onlyNewMembers;
    }

    public function wasRefunded(): ?bool
    {
        return $this->refunded;
    }

    public function getPrizeDescription(): ?string
    {
        return $this->prizeDescription;
    }
}
