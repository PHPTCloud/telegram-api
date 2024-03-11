<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SendChatActionArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class SendChatActionArgumentArraySerializer implements SendChatActionArgumentArraySerializerInterface
{
    public function serialize(SendChatActionArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::ACTION->value] = $argument->getAction();

        if ($argument->getMessageThreadId()) {
            $data[TelegramApiFieldEnum::MESSAGE_THREAD_ID->value] = $argument->getMessageThreadId();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
