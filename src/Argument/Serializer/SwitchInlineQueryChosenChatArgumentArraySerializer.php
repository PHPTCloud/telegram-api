<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SwitchInlineQueryChosenChatArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SwitchInlineQueryChosenChatArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SwitchInlineQueryChosenChatArgumentArraySerializer implements SwitchInlineQueryChosenChatArgumentArraySerializerInterface
{
    public function serialize(SwitchInlineQueryChosenChatArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getQuery()) {
            $data[TelegramApiFieldEnum::QUERY->value] = $argument->getQuery();
        }

        if ($argument->allowUserChats() !== null) {
            $data[TelegramApiFieldEnum::ALLOW_USER_CHATS->value] = $argument->allowUserChats();
        }

        if ($argument->allowBotChats() !== null) {
            $data[TelegramApiFieldEnum::ALLOW_BOT_CHATS->value] = $argument->allowBotChats();
        }

        if ($argument->allowGroupChats() !== null) {
            $data[TelegramApiFieldEnum::ALLOW_GROUP_CHATS->value] = $argument->allowGroupChats();
        }

        if ($argument->allowChannelChats() !== null) {
            $data[TelegramApiFieldEnum::ALLOW_CHANNEL_CHATS->value] = $argument->allowChannelChats();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
