<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageTextArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LinkPreviewOptionsArgumentInterface;

class EditMessageTextArgument implements EditMessageTextArgumentInterface
{
    public function __construct(
        private readonly int|float|string|null $chatId,
        private readonly string $text,
        private readonly ?int $messageId = null,
        private readonly ?string $inlineMessageId = null,
        private readonly ?string $parseMode = null,
        private readonly ?array $entities = null,
        private readonly ?LinkPreviewOptionsArgumentInterface $linkPreviewOptions = null,
        private readonly ?InlineKeyboardMarkupArgumentInterface $replyMarkup = null,
    ) {
    }

    public function getChatId(): int|float|string|null
    {
        return $this->chatId;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    public function getEntities(): ?array
    {
        return $this->entities;
    }

    public function getLinkPreviewOptions(): ?LinkPreviewOptionsArgumentInterface
    {
        return $this->linkPreviewOptions;
    }

    public function getReplyMarkup(): ?InlineKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup;
    }
}
