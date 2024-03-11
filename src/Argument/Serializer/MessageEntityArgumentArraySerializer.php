<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\MessageEntityArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\UserArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class MessageEntityArgumentArraySerializer implements MessageEntityArgumentArraySerializerInterface
{
    public function __construct(
        private readonly UserArgumentArraySerializerInterface $userArgumentArraySerializer,
    ) {
    }

    public function serialize(MessageEntityArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getType()) {
            $data[TelegramApiFieldEnum::TYPE->value] = $argument->getType();
        }

        if (!is_null($argument->getOffset())) {
            $data[TelegramApiFieldEnum::OFFSET->value] = $argument->getOffset();
        }

        if ($argument->getLength()) {
            $data[TelegramApiFieldEnum::LENGTH->value] = $argument->getLength();
        }

        if ($argument->getUrl()) {
            $data[TelegramApiFieldEnum::URL->value] = $argument->getUrl();
        }

        if ($argument->getUser()) {
            $data[TelegramApiFieldEnum::USER->value] = $this->userArgumentArraySerializer->serialize($argument->getUser());
        }

        if ($argument->getLanguage()) {
            $data[TelegramApiFieldEnum::LANGUAGE->value] = $argument->getLanguage();
        }

        if ($argument->getCustomEmojiId()) {
            $data[TelegramApiFieldEnum::CUSTOM_EMOJI_ID->value] = $argument->getCustomEmojiId();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
