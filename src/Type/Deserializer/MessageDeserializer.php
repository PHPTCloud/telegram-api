<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\PhotoSizeInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ContactDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\MessageDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\PhotoSizeDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MessageTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class MessageDeserializer extends AbstractDeserializer implements MessageDeserializerInterface
{
    public function __construct(
        private readonly MessageTypeFactoryInterface $messageTypeFactory,
        private readonly ChatDeserializerInterface $chatDeserializer,
        private readonly PhotoSizeDeserializerInterface $photoSizeDeserializer,
        private readonly ContactDeserializerInterface $contactDeserializer,
    ) {
    }

    public function deserialize(array $data): MessageInterface
    {
        $messageId = $data[TelegramApiFieldEnum::MESSAGE_ID->value] ?? null;
        $date = $data[TelegramApiFieldEnum::DATE->value] ?? null;
        $text = $data[TelegramApiFieldEnum::TEXT->value] ?? null;
        $chat = $data[TelegramApiFieldEnum::CHAT->value] ?? null;
        $photo = $data[TelegramApiFieldEnum::PHOTO->value] ?? null;
        $contact = $data[TelegramApiFieldEnum::CONTACT->value] ?? null;

        $messageId = $this->filterNumeric($messageId);
        $date = $this->filterNumeric($date);
        $text = $this->filterString($text);

        $chat = $this->filterArray($chat);
        if (!empty($chat)) {
            $chat = $this->chatDeserializer->deserialize($chat);
        }

        $photo = $this->filterArray($photo);
        if (!empty($photo)) {
            $photo = array_map(function (array $item): PhotoSizeInterface {
                return $this->photoSizeDeserializer->deserialize($item);
            }, $photo);
        }

        if ($contact) {
            $contact = $this->contactDeserializer->deserialize($contact);
        }

        return $this->messageTypeFactory->create(
            messageId: $messageId,
            date: $date,
            chat: $chat,
            text: $text,
            photo: $photo,
            contact: $contact,
        );
    }
}
