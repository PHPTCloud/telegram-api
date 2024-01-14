<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Builder;

use PHPTCloud\TelegramApi\Argument\Interfaces\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Type\DataObject\LinkPreviewOptions;
use PHPTCloud\TelegramApi\Type\Interfaces\ForceReplyInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\InlineKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MessageEntityInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ReplyKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ReplyKeyboardRemoveInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ReplyParametersInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 * @see     \PHPTCloud\TelegramApi\Argument\Interfaces\MessageArgumentInterface
 */
interface MessageArgumentBuilderInterface
{
    public function setChatId(string|int|float $chatId): MessageArgumentBuilderInterface;

    public function setText(string $text): MessageArgumentBuilderInterface;

    public function setMessageThreadId(int $messageThreadId): MessageArgumentBuilderInterface;

    public function setParseMode(?string $parseMode = null): MessageArgumentBuilderInterface;

    public function setEntities(array $entities): MessageArgumentBuilderInterface;

    public function addEntity(MessageEntityInterface $entity): MessageArgumentBuilderInterface;

    public function setLinkPreviewOptions(LinkPreviewOptions $linkPreviewOptions): MessageArgumentBuilderInterface;

    public function setNotificationDisabled(bool $notificationDisabled): MessageArgumentBuilderInterface;

    public function setContentProtected(bool $contentProtected): MessageArgumentBuilderInterface;

    public function setReplyParameters(ReplyParametersInterface $replyParameters): MessageArgumentBuilderInterface;

    public function setReplyMarkup(InlineKeyboardMarkupInterface|ReplyKeyboardMarkupInterface|ReplyKeyboardRemoveInterface|ForceReplyInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setInlineKeyboardMarkup(InlineKeyboardMarkupInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setReplyKeyboardMarkup(ReplyKeyboardMarkupInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setReplyKeyboardRemove(ReplyKeyboardRemoveInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function setForceReply(ForceReplyInterface $replyMarkup): MessageArgumentBuilderInterface;

    public function build(): MessageArgumentInterface;
}
