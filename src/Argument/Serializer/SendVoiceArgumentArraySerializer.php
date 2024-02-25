<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVoiceArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForceReplyArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardMarkupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyKeyboardRemoveArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyParametersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendVoiceArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SendVoiceArgumentArraySerializer implements SendVoiceArgumentArraySerializerInterface
{
    public function __construct(
        private readonly MessageEntityArgumentArraySerializerInterface $messageEntityArgumentArraySerializer,
        private readonly ReplyParametersArgumentArraySerializerInterface $replyParametersArgumentArraySerializer,
        private readonly InlineKeyboardMarkupArgumentArraySerializerInterface $inlineKeyboardMarkupArgumentArraySerializer,
        private readonly ReplyKeyboardRemoveArgumentArraySerializerInterface $replyKeyboardRemoveArgumentArraySerializer,
        private readonly ReplyKeyboardMarkupArgumentArraySerializerInterface $replyKeyboardMarkupArgumentArraySerializer,
        private readonly ForceReplyArgumentArraySerializerInterface $forceReplyArgumentArraySerializer,
    ) {
    }

    public function serialize(SendVoiceArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::VOICE->value] = $argument->getVoice();

        if ($argument->getDuration()) {
            $data[TelegramApiFieldEnum::DURATION->value] = $argument->getDuration();
        }

        if ($argument->getCaption()) {
            $data[TelegramApiFieldEnum::CAPTION->value] = $argument->getCaption();
        }

        if ($argument->getParseMode()) {
            $data[TelegramApiFieldEnum::PARSE_MODE->value] = $argument->getParseMode();
        }

        if ($argument->getCaptionEntities()) {
            $data[TelegramApiFieldEnum::CAPTION_ENTITIES->value] = array_map(
                function (MessageEntityArgumentInterface $messageEntity) {
                    return $this->messageEntityArgumentArraySerializer->serialize($messageEntity);
                },
                $argument->getCaptionEntities(),
            );
        }

        if (null !== $argument->wantDisableNotification()) {
            $data[TelegramApiFieldEnum::DISABLE_NOTIFICATION->value] = $argument->wantDisableNotification();
        }

        if (null !== $argument->wantProtectContent()) {
            $data[TelegramApiFieldEnum::PROTECT_CONTENT->value] = $argument->wantProtectContent();
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

        if ($argument->getMessageThreadId()) {
            $data[TelegramApiFieldEnum::MESSAGE_THREAD_ID->value] = $argument->getMessageThreadId();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
