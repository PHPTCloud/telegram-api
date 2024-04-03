<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageCaptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;

class EditMessageCaptionArgument implements EditMessageCaptionArgumentInterface
{
    public function __construct(
        private readonly int|float|string|null $chatId = null,
        private readonly ?int $messageId = null,
        private readonly ?string $inlineMessageId = null,
        private readonly ?string $caption = null,
        private readonly ?string $parseMode = null,
        private readonly ?array $captionEntities = null,
        private readonly ?InlineKeyboardMarkupArgumentInterface $replyMarkup = null,
    ) {
    }

    public function getChatId(): float|int|string|null
    {
        return $this->chatId;
    }

    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function getReplyMarkup(): ?InlineKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup;
    }
}
