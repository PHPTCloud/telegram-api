<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaAudioArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaDocumentArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaVideoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendMediaGroupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaAudioArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaDocumentArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaPhotoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaVideoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReplyParametersArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendMediaGroupArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SendMediaGroupArgumentArraySerializer implements SendMediaGroupArgumentArraySerializerInterface
{
    public function __construct(
        private readonly InputMediaAudioArgumentArraySerializerInterface $inputMediaAudioArgumentArraySerializer,
        private readonly InputMediaDocumentArgumentArraySerializerInterface $inputMediaDocumentArgumentArraySerializer,
        private readonly InputMediaPhotoArgumentArraySerializerInterface $inputMediaPhotoArgumentArraySerializer,
        private readonly InputMediaVideoArgumentArraySerializerInterface $inputMediaVideoArgumentArraySerializer,
        private readonly ReplyParametersArgumentArraySerializerInterface $replyParametersArgumentArraySerializer,
    ) {
    }

    public function serialize(SendMediaGroupArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();

        $data[TelegramApiFieldEnum::MEDIA->value] = [];
        foreach ($argument->getMedia() as $media) {
            if ($media instanceof InputMediaAudioArgumentInterface) {
                $data[TelegramApiFieldEnum::MEDIA->value][] = $this->inputMediaAudioArgumentArraySerializer->serialize($media);
            } elseif ($media instanceof InputMediaDocumentArgumentInterface) {
                $data[TelegramApiFieldEnum::MEDIA->value][] = $this->inputMediaDocumentArgumentArraySerializer->serialize($media);
            } elseif ($media instanceof InputMediaPhotoArgumentInterface) {
                $data[TelegramApiFieldEnum::MEDIA->value][] = $this->inputMediaPhotoArgumentArraySerializer->serialize($media);
            } elseif ($media instanceof InputMediaVideoArgumentInterface) {
                $data[TelegramApiFieldEnum::MEDIA->value][] = $this->inputMediaVideoArgumentArraySerializer->serialize($media);
            }
        }

        if ($argument->getMessageThreadId()) {
            $data[TelegramApiFieldEnum::MESSAGE_THREAD_ID->value] = $argument->getMessageThreadId();
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

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
