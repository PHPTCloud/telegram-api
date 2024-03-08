<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaAudioArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaAudioArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class InputMediaAudioArgumentArraySerializer implements InputMediaAudioArgumentArraySerializerInterface
{
    public function __construct(
        private readonly MessageEntityArgumentArraySerializerInterface $messageEntityArgumentArraySerializer,
    ) {
    }

    public function serialize(InputMediaAudioArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();
        $data[TelegramApiFieldEnum::MEDIA->value] = $argument->getMedia();

        if ($argument->getCaption()) {
            $data[TelegramApiFieldEnum::CAPTION->value] = $argument->getCaption();
        }

        if ($argument->getCaptionEntities()) {
            $data[TelegramApiFieldEnum::CAPTION_ENTITIES->value] = array_map(
                function (MessageEntityArgumentInterface $messageEntity) {
                    return $this->messageEntityArgumentArraySerializer->serialize($messageEntity);
                },
                $argument->getCaptionEntities(),
            );
        }

        if ($argument->getParseMode()) {
            $data[TelegramApiFieldEnum::PARSE_MODE->value] = $argument->getParseMode();
        }

        if ($argument->getThumbnail()) {
            $data[TelegramApiFieldEnum::THUMBNAIL->value] = $argument->getThumbnail();
        }

        if ($argument->getDuration()) {
            $data[TelegramApiFieldEnum::DURATION->value] = $argument->getDuration();
        }

        if ($argument->getPerformer()) {
            $data[TelegramApiFieldEnum::PERFORMER->value] = $argument->getPerformer();
        }

        if ($argument->getTitle()) {
            $data[TelegramApiFieldEnum::TITLE->value] = $argument->getTitle();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
