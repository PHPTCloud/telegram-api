<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LinkPreviewOptionsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyParametersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class MessageArgumentArraySerializer implements MessageArgumentArraySerializerInterface
{
    public function __construct(
        private readonly MessageEntityArgumentArraySerializerInterface $messageEntityArgumentArraySerializer,
        private readonly LinkPreviewOptionsArgumentArraySerializerInterface $linkPreviewOptionsArgumentArraySerializer,
        private readonly ReplyParametersArgumentArraySerializerInterface $replyParametersArgumentArraySerializer,
        private readonly InlineKeyboardMarkupArgumentArraySerializerInterface $inlineKeyboardMarkupArgumentArraySerializer,
    ) {
    }

    public function serialize(MessageArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getChatId()) {
            $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        }
        if ($argument->getMessageThreadId()) {
            $data[TelegramApiFieldEnum::MESSAGE_THREAD_ID->value] = $argument->getMessageThreadId();
        }
        if ($argument->getText()) {
            $data[TelegramApiFieldEnum::TEXT->value] = $argument->getText();
        }
        if ($argument->getParseMode()) {
            $data[TelegramApiFieldEnum::PARSE_MODE->value] = $argument->getParseMode();
        }
        if ($argument->getEntities()) {
            $data[TelegramApiFieldEnum::ENTITIES->value] = array_map(
                function (MessageEntityArgumentInterface $argument) {
                    return $this->messageEntityArgumentArraySerializer->serialize($argument);
                },
                $argument->getEntities(),
            );
        }
        if ($argument->getLinkPreviewOptions()) {
            $data[TelegramApiFieldEnum::LINK_PREVIEW_OPTIONS->value]
                = $this->linkPreviewOptionsArgumentArraySerializer->serialize($argument->getLinkPreviewOptions());
        }
        if ($argument->isNotificationDisabled()) {
            $data[TelegramApiFieldEnum::DISABLE_NOTIFICATION->value] = $argument->isNotificationDisabled();
        }
        if ($argument->isContentProtected()) {
            $data[TelegramApiFieldEnum::PROTECT_CONTENT->value] = $argument->isContentProtected();
        }
        if ($argument->getReplyParameters()) {
            $data[TelegramApiFieldEnum::REPLY_PARAMETERS->value]
                = $this->replyParametersArgumentArraySerializer->serialize($argument->getReplyParameters());
        }
        if ($argument->getReplyMarkup()) {
            $data[TelegramApiFieldEnum::REPLY_MARKUP->value]
                = $this->inlineKeyboardMarkupArgumentArraySerializer->serialize($argument->getReplyMarkup());
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
