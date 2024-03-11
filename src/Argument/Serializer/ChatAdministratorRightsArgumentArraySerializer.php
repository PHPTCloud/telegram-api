<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ChatAdministratorRightsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ChatAdministratorRightsArgumentArraySerializer implements ChatAdministratorRightsArgumentArraySerializerInterface
{
    public function serialize(ChatAdministratorRightsArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::IS_ANONYMOUS->value] = $argument->isAnonymous();
        $data[TelegramApiFieldEnum::CAN_MANAGE_CHAT->value] = $argument->canManageChat();
        $data[TelegramApiFieldEnum::CAN_DELETE_MESSAGES->value] = $argument->canDeleteMessages();
        $data[TelegramApiFieldEnum::CAN_MANAGE_VIDEO_CHATS->value] = $argument->canManageVideoChats();
        $data[TelegramApiFieldEnum::CAN_RESTRICT_MEMBERS->value] = $argument->canRestrictMembers();
        $data[TelegramApiFieldEnum::CAN_PROMOTE_MEMBERS->value] = $argument->canPromoteMembers();
        $data[TelegramApiFieldEnum::CAN_CHANGE_INFO->value] = $argument->canChangeInfo();
        $data[TelegramApiFieldEnum::CAN_INVITE_USERS->value] = $argument->canInviteUsers();

        if (null !== $argument->canPostMessages()) {
            $data[TelegramApiFieldEnum::CAN_POST_MESSAGES->value] = $argument->canPostMessages();
        }

        if (null !== $argument->canEditMessages()) {
            $data[TelegramApiFieldEnum::CAN_EDIT_MESSAGES->value] = $argument->canEditMessages();
        }

        if (null !== $argument->canPinMessages()) {
            $data[TelegramApiFieldEnum::CAN_PIN_MESSAGES->value] = $argument->canPinMessages();
        }

        if (null !== $argument->canPostStories()) {
            $data[TelegramApiFieldEnum::CAN_POST_STORIES->value] = $argument->canPostStories();
        }

        if (null !== $argument->canEditStories()) {
            $data[TelegramApiFieldEnum::CAN_EDIT_STORIES->value] = $argument->canEditStories();
        }

        if (null !== $argument->canDeleteStories()) {
            $data[TelegramApiFieldEnum::CAN_DELETE_STORIES->value] = $argument->canDeleteStories();
        }

        if (null !== $argument->canManageTopics()) {
            $data[TelegramApiFieldEnum::CAN_MANAGE_TOPICS->value] = $argument->canManageTopics();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
