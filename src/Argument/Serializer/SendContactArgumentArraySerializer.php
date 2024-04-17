<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendContactArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForceReplyArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardRemoveArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyParametersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendContactArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SendContactArgumentArraySerializer implements SendContactArgumentArraySerializerInterface
{
    public function __construct(
        private readonly ReplyParametersArgumentArraySerializerInterface $replyParametersArgumentArraySerializer,
        private readonly InlineKeyboardMarkupArgumentArraySerializerInterface $inlineKeyboardMarkupArgumentArraySerializer,
        private readonly ReplyKeyboardRemoveArgumentArraySerializerInterface $replyKeyboardRemoveArgumentArraySerializer,
        private readonly ReplyKeyboardMarkupArgumentArraySerializerInterface $replyKeyboardMarkupArgumentArraySerializer,
        private readonly ForceReplyArgumentArraySerializerInterface $forceReplyArgumentArraySerializer,
    ) {
    }

    public function serialize(SendContactArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::FIRST_NAME->value] = $argument->getFirstName();
        $data[TelegramApiFieldEnum::PHONE_NUMBER->value] = $argument->getPhoneNumber();

        if ($argument->getLastName()) {
            $data[TelegramApiFieldEnum::LAST_NAME->value] = $argument->getLastName();
        }

        if ($argument->getVcard()) {
            $data[TelegramApiFieldEnum::VCARD->value] = $argument->getVcard();
        }

        if ($argument->getMessageThreadId()) {
            $data[TelegramApiFieldEnum::MESSAGE_THREAD_ID->value] = $argument->getMessageThreadId();
        }

        if ($argument->getBusinessConnectionId()) {
            $data[TelegramApiFieldEnum::BUSINESS_CONNECTION_ID->value] = $argument->getBusinessConnectionId();
        }

        if ($argument->isDisableNotification()) {
            $data[TelegramApiFieldEnum::DISABLE_NOTIFICATION->value] = $argument->isDisableNotification();
        }
        if ($argument->isProtectContent()) {
            $data[TelegramApiFieldEnum::PROTECT_CONTENT->value] = $argument->isProtectContent();
        }

        if ($argument->getReplyParameters()) {
            $data[TelegramApiFieldEnum::REPLY_PARAMETERS->value]
                = $this->replyParametersArgumentArraySerializer->serialize($argument->getReplyParameters());
        }

        if ($argument->getReplyKeyboardRemove()) {
            $data[TelegramApiFieldEnum::REPLY_MARKUP->value]
                = $this->replyKeyboardRemoveArgumentArraySerializer->serialize($argument->getReplyKeyboardRemove());
        }

        if ($argument->getInlineKeyboardMarkup()) {
            $data[TelegramApiFieldEnum::REPLY_MARKUP->value]
                = $this->inlineKeyboardMarkupArgumentArraySerializer->serialize($argument->getInlineKeyboardMarkup());
        }

        if ($argument->getReplyKeyboardMarkup()) {
            $data[TelegramApiFieldEnum::REPLY_MARKUP->value]
                = $this->replyKeyboardMarkupArgumentArraySerializer->serialize($argument->getReplyKeyboardMarkup());
        }

        if ($argument->getForceReply()) {
            $data[TelegramApiFieldEnum::REPLY_MARKUP->value]
                = $this->forceReplyArgumentArraySerializer->serialize($argument->getForceReply());
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
