<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForwardMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ForwardMessageArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class ForwardMessageArgumentArraySerializer implements ForwardMessageArgumentArraySerializerInterface
{
    public function serialize(ForwardMessageArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::FROM_CHAT_ID->value] = $argument->getFromChatId();
        $data[TelegramApiFieldEnum::MESSAGE_ID->value] = $argument->getMessageId();

        if ($argument->getMessageThreadId()) {
            $data[TelegramApiFieldEnum::MESSAGE_THREAD_ID->value] = $argument->getMessageThreadId();
        }

        if ($argument->wantProtectContent() !== null) {
            $data[TelegramApiFieldEnum::PROTECT_CONTENT->value] = $argument->wantProtectContent();
        }

        if ($argument->wantDisableNotification() !== null) {
            $data[TelegramApiFieldEnum::DISABLE_NOTIFICATION->value] = $argument->wantDisableNotification();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
