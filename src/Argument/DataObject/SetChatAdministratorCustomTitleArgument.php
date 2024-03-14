<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatAdministratorCustomTitleArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class SetChatAdministratorCustomTitleArgument implements SetChatAdministratorCustomTitleArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly int|float $userId,
        private readonly string $customTitle,
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

    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }
}
