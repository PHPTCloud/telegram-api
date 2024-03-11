<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaDocumentArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InputMediaDocumentArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class InputMediaDocumentArgumentArraySerializer implements InputMediaDocumentArgumentArraySerializerInterface
{
    public function __construct(
        private readonly MessageEntityArgumentArraySerializerInterface $messageEntityArgumentArraySerializer,
    ) {
    }

    public function serialize(InputMediaDocumentArgumentInterface $argument): array
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

        if ($argument->wantDisableContentTypeDetection()) {
            $data[TelegramApiFieldEnum::DISABLE_CONTENT_TYPE_DETECTION->value] = $argument->wantDisableContentTypeDetection();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
