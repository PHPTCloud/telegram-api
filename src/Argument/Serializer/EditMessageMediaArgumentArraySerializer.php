<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageMediaArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaAudioArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaDocumentArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaVideoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\EditMessageMediaArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaAudioArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaDocumentArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaPhotoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaVideoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class EditMessageMediaArgumentArraySerializer implements EditMessageMediaArgumentArraySerializerInterface
{
    public function __construct(
        private readonly InlineKeyboardMarkupArgumentArraySerializerInterface $inlineKeyboardMarkupArgumentArraySerializer,
        private readonly InputMediaVideoArgumentArraySerializerInterface $inputMediaVideoArgumentArraySerializer,
        private readonly InputMediaPhotoArgumentArraySerializerInterface $inputMediaPhotoArgumentArraySerializer,
        private readonly InputMediaAudioArgumentArraySerializerInterface $inputMediaAudioArgumentArraySerializer,
        private readonly InputMediaDocumentArgumentArraySerializerInterface $inputMediaDocumentArgumentArraySerializer,
    ) {
    }

    public function serialize(EditMessageMediaArgumentInterface $argument): array
    {
        $data = [];

        if (!$argument->getInlineMessageId() && !$argument->getChatId()) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        $data[TelegramApiFieldEnum::MEDIA->value] = $argument->getMedia();

        if ($argument->getChatId()) {
            $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        }

        if ($argument->getMessageId()) {
            $data[TelegramApiFieldEnum::MESSAGE_ID->value] = $argument->getMessageId();
        }

        if ($argument->getInlineMessageId()) {
            $data[TelegramApiFieldEnum::INLINE_MESSAGE_ID->value] = $argument->getInlineMessageId();
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
