<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageCaptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\EditMessageCaptionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class EditMessageCaptionArgumentArraySerializer implements EditMessageCaptionArgumentArraySerializerInterface
{
    public function __construct(
        private readonly InlineKeyboardMarkupArgumentArraySerializerInterface $inlineKeyboardMarkupArgumentArraySerializer,
        private readonly MessageEntityArgumentArraySerializerInterface $messageEntityArgumentArraySerializer,
    ) {
    }

    public function serialize(EditMessageCaptionArgumentInterface $argument): array
    {
        $data = [];

        if (!$argument->getInlineMessageId() && !$argument->getChatId()) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        if ($argument->getChatId()) {
            $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        }

        if ($argument->getMessageId()) {
            $data[TelegramApiFieldEnum::MESSAGE_ID->value] = $argument->getMessageId();
        }

        if ($argument->getInlineMessageId()) {
            $data[TelegramApiFieldEnum::INLINE_MESSAGE_ID->value] = $argument->getInlineMessageId();
        }

        if ($argument->getCaption()) {
            $data[TelegramApiFieldEnum::CAPTION->value] = $argument->getCaption();
        }

        if ($argument->getParseMode()) {
            $data[TelegramApiFieldEnum::PARSE_MODE->value] = $argument->getParseMode();
        }

        if ($argument->getCaptionEntities()) {
            $data[TelegramApiFieldEnum::CAPTION_ENTITIES->value] = array_map(function (MessageEntityArgumentInterface $argument) {
                return $this->messageEntityArgumentArraySerializer->serialize($argument);
            }, $argument->getCaptionEntities());
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
