<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVenueArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForceReplyArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardRemoveArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyParametersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendVenueArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SendVenueArgumentArraySerializer implements SendVenueArgumentArraySerializerInterface
{
    public function __construct(
        private readonly ReplyParametersArgumentArraySerializerInterface $replyParametersArgumentArraySerializer,
        private readonly InlineKeyboardMarkupArgumentArraySerializerInterface $inlineKeyboardMarkupArgumentArraySerializer,
        private readonly ReplyKeyboardRemoveArgumentArraySerializerInterface $replyKeyboardRemoveArgumentArraySerializer,
        private readonly ReplyKeyboardMarkupArgumentArraySerializerInterface $replyKeyboardMarkupArgumentArraySerializer,
        private readonly ForceReplyArgumentArraySerializerInterface $forceReplyArgumentArraySerializer,
    ) {
    }

    public function serialize(SendVenueArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::LATITUDE->value] = $argument->getLatitude();
        $data[TelegramApiFieldEnum::LONGITUDE->value] = $argument->getLongitude();
        $data[TelegramApiFieldEnum::TITLE->value] = $argument->getTitle();
        $data[TelegramApiFieldEnum::ADDRESS->value] = $argument->getAddress();

        if ($argument->getMessageThreadId()) {
            $data[TelegramApiFieldEnum::MESSAGE_THREAD_ID->value] = $argument->getMessageThreadId();
        }

        if ($argument->getBusinessConnectionId()) {
            $data[TelegramApiFieldEnum::BUSINESS_CONNECTION_ID->value] = $argument->getBusinessConnectionId();
        }

        if ($argument->getFoursquareId()) {
            $data[TelegramApiFieldEnum::FOURSQUARE_ID->value] = $argument->getFoursquareId();
        }

        if ($argument->getFoursquareType()) {
            $data[TelegramApiFieldEnum::FOURSQUARE_TYPE->value] = $argument->getFoursquareType();
        }

        if ($argument->getGooglePlaceId()) {
            $data[TelegramApiFieldEnum::GOOGLE_PLACE_ID->value] = $argument->getGooglePlaceId();
        }

        if ($argument->getGooglePlaceType()) {
            $data[TelegramApiFieldEnum::GOOGLE_PLACE_TYPE->value] = $argument->getGooglePlaceType();
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
