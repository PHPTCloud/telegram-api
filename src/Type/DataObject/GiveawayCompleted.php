<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GiveawayCompletedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение о завершении розыгрыша без публичных победителей.
 *
 * @see    https://core.telegram.org/bots/api#giveawaycompleted
 */
class GiveawayCompleted implements GiveawayCompletedInterface
{
    public function __construct(
        private readonly int $winnerCount,
        private readonly ?int $unclaimedPrizeCount = null,
        private readonly ?MessageInterface $giveawayMessage = null,
    ) {
    }

    public function getWinnerCount(): int
    {
        return $this->winnerCount;
    }

    public function getUnclaimedPrizeCount(): ?int
    {
        return $this->unclaimedPrizeCount;
    }

    public function getGiveawayMessage(): ?MessageInterface
    {
        return $this->giveawayMessage;
    }
}
