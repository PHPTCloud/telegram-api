<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendMediaGroupArgumentInterface;

class SendMediaGroupArgument implements SendMediaGroupArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly array $media,
        private readonly ?int $messageThreadId = null,
        private readonly ?bool $disableNotification = null,
        private readonly ?bool $protectContent = null,
        private readonly ?ReplyParametersArgumentInterface $replyParameters = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getMedia(): array
    {
        return $this->media;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }

    public function wantDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    public function wantProtectContent(): ?bool
    {
        return $this->protectContent;
    }

    public function getReplyParameters(): ?ReplyParametersArgumentInterface
    {
        return $this->replyParameters;
    }
}
