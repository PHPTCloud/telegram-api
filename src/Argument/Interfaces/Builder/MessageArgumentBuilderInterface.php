<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\Builder;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LinkPreviewOptionsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForceReplyInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\InlineKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyKeyboardRemoveInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * @see     MessageArgumentInterface
 */
interface MessageArgumentBuilderInterface
{
    public function setChatId(string|int|float $chatId): MessageArgumentBuilderInterface;

    public function setText(string $text): MessageArgumentBuilderInterface;

    public function setMessageThreadId(int $messageThreadId): MessageArgumentBuilderInterface;

    public function setParseMode(string $parseMode = null): MessageArgumentBuilderInterface;

    public function setEntities(array $entities): MessageArgumentBuilderInterface;

    public function addEntity(MessageEntityArgumentInterface $entity): MessageArgumentBuilderInterface;

    public function setLinkPreviewOptions(LinkPreviewOptionsArgumentInterface $linkPreviewOptions): MessageArgumentBuilderInterface;

    public function setNotificationDisabled(bool $notificationDisabled): MessageArgumentBuilderInterface;

    public function setContentProtected(bool $contentProtected): MessageArgumentBuilderInterface;

    public function setReplyParameters(ReplyParametersArgumentInterface $replyParameters): MessageArgumentBuilderInterface;

    public function setReplyMarkup(InlineKeyboardMarkupInterface|ReplyKeyboardMarkupInterface|ReplyKeyboardRemoveInterface|ForceReplyInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setInlineKeyboardMarkup(InlineKeyboardMarkupInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setReplyKeyboardMarkup(ReplyKeyboardMarkupInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setReplyKeyboardRemove(ReplyKeyboardRemoveInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setForceReply(ForceReplyInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function build(): MessageArgumentInterface;
}
