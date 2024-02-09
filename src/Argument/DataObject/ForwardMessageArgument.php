<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;

class ForwardMessageArgument implements ForwardMessageArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly int|float|string $fromChatId,
        private readonly int $messageId,
        private readonly ?bool $disableNotification = null,
        private readonly ?bool $protectContent = null,
        private readonly ?int $messageThreadId = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getFromChatId(): float|int|string
    {
        return $this->fromChatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function wantDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    public function wantProtectContent(): ?bool
    {
        return $this->protectContent;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }
}
