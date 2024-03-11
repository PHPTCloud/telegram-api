<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ForwardMessagesArgumentArraySerializer implements ForwardMessagesArgumentArraySerializerInterface
{
    public function serialize(ForwardMessagesArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::FROM_CHAT_ID->value] = $argument->getFromChatId();
        $data[TelegramApiFieldEnum::MESSAGE_IDS->value] = $argument->getMessageIds();

        if ($argument->getMessageThreadId()) {
            $data[TelegramApiFieldEnum::MESSAGE_THREAD_ID->value] = $argument->getMessageThreadId();
        }

        if (null !== $argument->wantProtectContent()) {
            $data[TelegramApiFieldEnum::PROTECT_CONTENT->value] = $argument->wantProtectContent();
        }

        if (null !== $argument->wantDisableNotification()) {
            $data[TelegramApiFieldEnum::DISABLE_NOTIFICATION->value] = $argument->wantDisableNotification();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
