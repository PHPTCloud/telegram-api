<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BanChatMemberArgumentInterface;

class BanChatMemberArgument implements BanChatMemberArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly int|float $userId,
        private readonly ?int $untilDate = null,
        private readonly ?bool $revokeMessages = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getUserId(): float|int
    {
        return $this->userId;
    }

    public function getUntilDate(): ?int
    {
        return $this->untilDate;
    }

    public function isRevokeMessages(): ?bool
    {
        return $this->revokeMessages;
    }
}
