<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatAdministratorRightsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatAdministratorRightsDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatAdministratorRightsTypeFactoryInterface;

class ChatAdministratorRightsDeserializer extends AbstractDeserializer implements ChatAdministratorRightsDeserializerInterface
{
    public function __construct(
        private readonly ChatAdministratorRightsTypeFactoryInterface $typeFactory,
    ) {
    }

    public function deserialize(array $data): ChatAdministratorRightsInterface
    {
        $anonymous = $data[TelegramApiFieldEnum::IS_ANONYMOUS->value] ?? null;
        $manageChat = $data[TelegramApiFieldEnum::CAN_MANAGE_CHAT->value] ?? null;
        $deleteMessages = $data[TelegramApiFieldEnum::CAN_DELETE_MESSAGES->value] ?? null;
        $manageVideoChats = $data[TelegramApiFieldEnum::CAN_MANAGE_CHAT->value] ?? null;
        $restrictMembers = $data[TelegramApiFieldEnum::CAN_RESTRICT_MEMBERS->value] ?? null;
        $promoteMembers = $data[TelegramApiFieldEnum::CAN_PROMOTE_MEMBERS->value] ?? null;
        $changeInfo = $data[TelegramApiFieldEnum::CAN_CHANGE_INFO->value] ?? null;
        $inviteUsers = $data[TelegramApiFieldEnum::CAN_INVITE_USERS->value] ?? null;
        $postMessages = $data[TelegramApiFieldEnum::CAN_POST_MESSAGES->value] ?? null;
        $editMessages = $data[TelegramApiFieldEnum::CAN_EDIT_MESSAGES->value] ?? null;
        $pinMessages = $data[TelegramApiFieldEnum::CAN_PIN_MESSAGES->value] ?? null;
        $postStories = $data[TelegramApiFieldEnum::CAN_POST_STORIES->value] ?? null;
        $editStories = $data[TelegramApiFieldEnum::CAN_EDIT_STORIES->value] ?? null;
        $deleteStories = $data[TelegramApiFieldEnum::CAN_DELETE_STORIES->value] ?? null;
        $manageTopics = $data[TelegramApiFieldEnum::CAN_MANAGE_TOPICS->value] ?? null;

        $anonymous = $this->filterBoolean($anonymous);
        $manageChat = $this->filterBoolean($manageChat);
        $deleteMessages = $this->filterBoolean($deleteMessages);
        $manageVideoChats = $this->filterBoolean($manageVideoChats);
        $restrictMembers = $this->filterBoolean($restrictMembers);
        $promoteMembers = $this->filterBoolean($promoteMembers);
        $changeInfo = $this->filterBoolean($changeInfo);
        $inviteUsers = $this->filterBoolean($inviteUsers);
        $postMessages = $this->filterBoolean($postMessages);
        $editMessages = $this->filterBoolean($editMessages);
        $pinMessages = $this->filterBoolean($pinMessages);
        $postStories = $this->filterBoolean($postStories);
        $editStories = $this->filterBoolean($editStories);
        $deleteStories = $this->filterBoolean($deleteStories);
        $manageTopics = $this->filterBoolean($manageTopics);

        return $this->typeFactory->create(
            $anonymous,
            $manageChat,
            $deleteMessages,
            $manageVideoChats,
            $restrictMembers,
            $promoteMembers,
            $changeInfo,
            $inviteUsers,
            $postMessages,
            $editMessages,
            $pinMessages,
            $postStories,
            $editStories,
            $deleteStories,
            $manageTopics,
        );
    }
}
