<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaVideoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaVideoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class InputMediaVideoArgumentArraySerializer implements InputMediaVideoArgumentArraySerializerInterface
{
    public function __construct(
        private readonly MessageEntityArgumentArraySerializerInterface $messageEntityArgumentArraySerializer,
    ) {
    }

    public function serialize(InputMediaVideoArgumentInterface $argument): array
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

        if ($argument->hasSpoiler()) {
            $data[TelegramApiFieldEnum::HAS_SPOILER->value] = $argument->hasSpoiler();
        }

        if ($argument->isSupportsStreaming()) {
            $data[TelegramApiFieldEnum::SUPPORTS_STREAMING->value] = $argument->isSupportsStreaming();
        }

        if ($argument->getDuration()) {
            $data[TelegramApiFieldEnum::DURATION->value] = $argument->getDuration();
        }

        if ($argument->getWidth()) {
            $data[TelegramApiFieldEnum::WIDTH->value] = $argument->getWidth();
        }

        if ($argument->getHeight()) {
            $data[TelegramApiFieldEnum::HEIGHT->value] = $argument->getHeight();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
