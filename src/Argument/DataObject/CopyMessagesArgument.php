<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessagesArgumentInterface;

class CopyMessagesArgument implements CopyMessagesArgumentInterface
{
    public function __construct(
        protected readonly int|float|string $chatId,
        protected readonly int|float|string $fromChatId,
        protected readonly array $messageIds,
        protected readonly ?bool $disableNotification = null,
        protected readonly ?bool $protectContent = null,
        protected readonly ?bool $removeCaption = null,
        protected readonly ?int $messageThreadId = null,
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

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function wantDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    public function wantProtectContent(): ?bool
    {
        return $this->protectContent;
    }

    public function wantRemoveCaption(): ?bool
    {
        return $this->removeCaption;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }
}
