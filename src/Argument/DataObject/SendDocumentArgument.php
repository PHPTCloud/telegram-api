<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendDocumentArgumentInterface;

class SendDocumentArgument implements SendDocumentArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly LocalFileArgumentInterface|string $document,
        private readonly ?int $messageThreadId = null,
        private readonly ?string $caption = null,
        private readonly ?array $captionEntities = null,
        private readonly LocalFileArgumentInterface|string|null $thumbnail = null,
        private readonly ?string $parseMode = null,
        private readonly ?bool $disableNotification = null,
        private readonly ?bool $protectContent = null,
        private readonly ?bool $disableContentTypeDetection = null,
        private readonly ?ReplyParametersArgumentInterface $replyParameters = null,
        private readonly InlineKeyboardMarkupArgumentInterface
                        |ReplyKeyboardMarkupArgumentInterface
                        |ReplyKeyboardRemoveArgumentInterface
                        |ForceReplyArgumentInterface
                        |null $replyMarkup = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getDocument(): LocalFileArgumentInterface|string
    {
        return $this->document;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function getThumbnail(): LocalFileArgumentInterface|string|null
    {
        return $this->thumbnail;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
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

    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup instanceof InlineKeyboardMarkupArgumentInterface ? $this->replyMarkup : null;
    }

    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup instanceof ReplyKeyboardMarkupArgumentInterface ? $this->replyMarkup : null;
    }

    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface
    {
        return $this->replyMarkup instanceof ReplyKeyboardRemoveArgumentInterface ? $this->replyMarkup : null;
    }

    public function getForceReply(): ?ForceReplyArgumentInterface
    {
        return $this->replyMarkup instanceof ForceReplyArgumentInterface ? $this->replyMarkup : null;
    }

    public function wantDisableContentTypeDetection(): ?bool
    {
        return $this->disableContentTypeDetection;
    }
}
