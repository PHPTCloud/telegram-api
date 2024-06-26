<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMemberArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class GetChatMemberArgument implements GetChatMemberArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly int|float $userId,
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
}
