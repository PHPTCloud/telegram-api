<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendPhotoArgumentInterface;

class SendPhotoArgument implements SendPhotoArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly LocalFileArgumentInterface|string $photo,
        private readonly ?int $messageThreadId = null,
        private readonly ?string $caption = null,
        private readonly ?string $parseMode = null,
        private readonly ?array $captionEntities = null,
        private readonly ?bool $spoiler = null,
        private readonly ?bool $disableNotification = null,
        private readonly ?bool $protectContent = null,
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

    public function getPhoto(): LocalFileArgumentInterface|string
    {
        return $this->photo;
    }

    public function isLocalFile(): bool
    {
        return $this->photo instanceof LocalFileArgumentInterface;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
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

    public function hasSpoiler(): ?bool
    {
        return $this->spoiler;
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
        return $this->replyMarkup;
    }

    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup;
    }

    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface
    {
        return $this->replyMarkup;
    }

    public function getForceReply(): ?ForceReplyArgumentInterface
    {
        return $this->replyMarkup;
    }
}
