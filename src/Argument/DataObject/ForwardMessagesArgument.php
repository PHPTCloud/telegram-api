<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessagesArgumentInterface;

class ForwardMessagesArgument implements ForwardMessagesArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly int|float|string $fromChatId,
        private readonly array $messageIds,
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
        throw new \BadMethodCallException(sprintf('В контексте класса %s запрещено использование метода %s.', __CLASS__, __METHOD__));
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

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }
}
