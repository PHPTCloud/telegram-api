<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\MessageDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MessageTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class MessageDeserializer extends AbstractDeserializer implements MessageDeserializerInterface
{
    public function __construct(
        private readonly MessageTypeFactoryInterface $messageTypeFactory,
        private readonly ChatDeserializerInterface   $chatDeserializer,
    ) {}

    public function deserialize(array $data): MessageInterface
    {
        $messageId = $data[TelegramApiFieldEnum::MESSAGE_ID->value] ?? null;
        $date = $data[TelegramApiFieldEnum::DATE->value] ?? null;
        $text = $data[TelegramApiFieldEnum::TEXT->value] ?? null;
        $chat = $data[TelegramApiFieldEnum::CHAT->value] ?? null;

        $messageId = $this->filterNumeric($messageId);
        $date = $this->filterNumeric($date);
        $text = $this->filterString($text);
        $chat = $this->filterArray($chat);
        if (!empty($chat)) {
            $chat = $this->chatDeserializer->deserialize($chat);
        }

        return $this->messageTypeFactory->create(
            messageId: $messageId,
            date: $date,
            chat: $chat,
            text: $text,
        );
    }
}
