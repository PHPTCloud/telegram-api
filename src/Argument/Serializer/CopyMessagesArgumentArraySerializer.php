<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\CopyMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\CopyMessagesArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class CopyMessagesArgumentArraySerializer implements CopyMessagesArgumentArraySerializerInterface
{
    public function serialize(CopyMessagesArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        $data[TelegramApiFieldEnum::FROM_CHAT_ID->value] = $argument->getFromChatId();
        $data[TelegramApiFieldEnum::MESSAGE_IDS->value] = $argument->getMessageIds();

        if ($argument->wantDisableNotification() !== null) {
            $data[TelegramApiFieldEnum::DISABLE_NOTIFICATION->value] = $argument->wantDisableNotification();
        }

        if ($argument->wantProtectContent() !== null) {
            $data[TelegramApiFieldEnum::PROTECT_CONTENT->value] = $argument->wantProtectContent();
        }

        if ($argument->getMessageThreadId()) {
            $data[TelegramApiFieldEnum::MESSAGE_THREAD_ID->value] = $argument->getMessageThreadId();
        }

        if ($argument->wantRemoveCaption() !== null) {
            $data[TelegramApiFieldEnum::REMOVE_CAPTION->value] = $argument->wantRemoveCaption();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
