<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMessageArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class DeleteMessageArgument implements DeleteMessageArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly int $messageId,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
