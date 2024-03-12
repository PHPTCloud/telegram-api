<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UnbanChatMemberArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class UnbanChatMemberArgument implements UnbanChatMemberArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly int|float $userId,
        private readonly ?bool $onlyIfBanned = null,
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

    public function isOnlyIfBanned(): ?bool
    {
        return $this->onlyIfBanned;
    }
}
