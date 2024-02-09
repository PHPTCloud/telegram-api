<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LinkPreviewOptionsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class MessageArgument implements MessageArgumentInterface
{
    public function __construct(
        private string|int|float|null $chatId = null,
        private ?int $messageThreadId = null,
        private ?string $text = null,
        private ?string $parseMode = null,
        private ?array $entities = null,
        private ?LinkPreviewOptionsArgumentInterface $linkPreviewOptions = null,
        private ?bool $notificationDisabled = null,
        private ?bool $contentProtected = null,
        private ?ReplyParametersArgumentInterface $replyParameters = null,
        private InlineKeyboardMarkupArgumentInterface|ReplyKeyboardMarkupArgumentInterface|ReplyKeyboardRemoveArgumentInterface|ForceReplyArgumentInterface|null $replyMarkup = null,
    ) {
    }

    public function getChatId(): float|int|string|null
    {
        return $this->chatId;
    }

    public function setChatId(float|int|string $chatId): void
    {
        $this->chatId = $chatId;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }

    public function setMessageThreadId(int $messageThreadId = null): void
    {
        $this->messageThreadId = $messageThreadId;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function getParseMode(): ?string
    {
        return $this->parseMode;
    }

    public function setParseMode(string $parseMode = null): void
    {
        $this->parseMode = $parseMode;
    }

    public function getEntities(): ?array
    {
        return $this->entities;
    }

    public function setEntities(array $entities = null): void
    {
        $this->entities = $entities;
    }

    public function addEntity(MessageEntityArgumentInterface $entity): void
    {
        $this->entities[] = $entity;
    }

    public function getLinkPreviewOptions(): LinkPreviewOptionsArgumentInterface|null
    {
        return $this->linkPreviewOptions;
    }

    public function setLinkPreviewOptions(LinkPreviewOptionsArgumentInterface $linkPreviewOptions = null): void
    {
        $this->linkPreviewOptions = $linkPreviewOptions;
    }

    public function isNotificationDisabled(): ?bool
    {
        return $this->notificationDisabled;
    }

    public function setNotificationDisabled(bool $notificationDisabled = null): void
    {
        $this->notificationDisabled = $notificationDisabled;
    }

    public function isContentProtected(): ?bool
    {
        return $this->contentProtected;
    }

    public function setContentProtected(bool $contentProtected = null): void
    {
        $this->contentProtected = $contentProtected;
    }

    public function getReplyParameters(): ?ReplyParametersArgumentInterface
    {
        return $this->replyParameters;
    }

    public function setReplyParameters(ReplyParametersArgumentInterface $replyParameters = null): void
    {
        $this->replyParameters = $replyParameters;
    }

    public function getReplyMarkup(): InlineKeyboardMarkupArgumentInterface|ReplyKeyboardMarkupArgumentInterface|ReplyKeyboardRemoveArgumentInterface|ForceReplyArgumentInterface|null
    {
        return $this->replyMarkup;
    }

    public function setReplyMarkup(
        InlineKeyboardMarkupArgumentInterface
        |ReplyKeyboardMarkupArgumentInterface
        |ReplyKeyboardRemoveArgumentInterface
        |ForceReplyArgumentInterface $replyMarkup = null
    ): void {
        $this->replyMarkup = $replyMarkup;
    }

    public function setInlineKeyboardMarkup(InlineKeyboardMarkupArgumentInterface $replyMarkup = null): void
    {
        $this->replyMarkup = $replyMarkup;
    }

    public function setReplyKeyboardMarkup(ReplyKeyboardMarkupArgumentInterface $replyMarkup = null): void
    {
        $this->replyMarkup = $replyMarkup;
    }

    public function setReplyKeyboardRemove(ReplyKeyboardRemoveArgumentInterface $replyMarkup = null): void
    {
        $this->replyMarkup = $replyMarkup;
    }

    public function setForceReply(ForceReplyArgumentInterface $replyMarkup = null): void
    {
        $this->replyMarkup = $replyMarkup;
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
