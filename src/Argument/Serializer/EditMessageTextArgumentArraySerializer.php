<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageTextArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\EditMessageTextArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LinkPreviewOptionsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class EditMessageTextArgumentArraySerializer implements EditMessageTextArgumentArraySerializerInterface
{
    public function __construct(
        private readonly MessageEntityArgumentArraySerializerInterface $messageEntityArgumentArraySerializer,
        private readonly InlineKeyboardMarkupArgumentArraySerializerInterface $inlineKeyboardMarkupArgumentArraySerializer,
        private readonly LinkPreviewOptionsArgumentArraySerializerInterface $linkPreviewOptionsArgumentArraySerializer,
    ) {
    }

    public function serialize(EditMessageTextArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::TEXT->value] = $argument->getText();

        if ($argument->getMessageId()) {
            $data[TelegramApiFieldEnum::MESSAGE_ID->value] = $argument->getMessageId();
        }

        if ($argument->getInlineMessageId()) {
            $data[TelegramApiFieldEnum::INLINE_MESSAGE_ID->value] = $argument->getInlineMessageId();
        }

        if ($argument->getParseMode()) {
            $data[TelegramApiFieldEnum::PARSE_MODE->value] = $argument->getParseMode();
        }

        if ($argument->getEntities()) {
            $data[TelegramApiFieldEnum::ENTITIES->value] = array_map(function (MessageEntityArgumentInterface $argument) {
                return $this->messageEntityArgumentArraySerializer->serialize($argument);
            }, $argument->getEntities());
        }

        if ($argument->getLinkPreviewOptions()) {
            $data[TelegramApiFieldEnum::LINK_PREVIEW_OPTIONS->value]
                = $this->linkPreviewOptionsArgumentArraySerializer->serialize($argument->getLinkPreviewOptions());
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
