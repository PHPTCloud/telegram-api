<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class CopyMessageArgument implements CopyMessageArgumentInterface
{
    public function __construct(
        protected readonly int|float|string $chatId,
        protected readonly int|float|string $fromChatId,
        protected readonly int $messageId,
        protected readonly ?string $caption = null,
        protected readonly ?string $parseMode = null,
        protected readonly ?array $captionEntities = null,
        protected readonly ?bool $disableNotification = null,
        protected readonly ?bool $protectContent = null,
        protected readonly ?ReplyParametersArgumentInterface $replyParameters = null,
        protected readonly InlineKeyboardMarkupArgumentInterface
                           |ReplyKeyboardMarkupArgumentInterface
                           |ReplyKeyboardRemoveArgumentInterface
                           |ForceReplyArgumentInterface
                           |null $replyMarkup = null,
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

    public function getMessageId(): int
    {
        return $this->messageId;
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

    public function getReplyMarkup(): ReplyKeyboardMarkupArgumentInterface|ReplyKeyboardRemoveArgumentInterface|ForceReplyArgumentInterface|InlineKeyboardMarkupArgumentInterface|null
    {
        return $this->replyMarkup;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
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
}
