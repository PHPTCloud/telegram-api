<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberAdministratorInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatMemberAdministratorDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberAdministratorTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberAdministratorDeserializer extends AbstractDeserializer implements ChatMemberAdministratorDeserializerInterface
{
    public function __construct(
        private readonly ChatMemberAdministratorTypeFactoryInterface $typeFactory,
        private readonly UserDeserializerInterface $userDeserializer,
    ) {
    }

    public function deserialize(array $data): ChatMemberAdministratorInterface
    {
        $status = $data[TelegramApiFieldEnum::STATUS->value] ?? null;
        $user = $this->userDeserializer->deserialize($data[TelegramApiFieldEnum::USER->value]);
        $canBeEdited = $data[TelegramApiFieldEnum::CAN_BE_EDITED->value] ?? null;
        $isAnonymous = $data[TelegramApiFieldEnum::IS_ANONYMOUS->value] ?? null;
        $canManageChat = $data[TelegramApiFieldEnum::CAN_MANAGE_CHAT->value] ?? null;
        $canDeleteMessages = $data[TelegramApiFieldEnum::CAN_DELETE_MESSAGES->value] ?? null;
        $canManageVideoChats = $data[TelegramApiFieldEnum::CAN_MANAGE_VIDEO_CHATS->value] ?? null;
        $canRestrictMembers = $data[TelegramApiFieldEnum::CAN_RESTRICT_MEMBERS->value] ?? null;
        $canPromoteMembers = $data[TelegramApiFieldEnum::CAN_PROMOTE_MEMBERS->value] ?? null;
        $canChangeInfo = $data[TelegramApiFieldEnum::CAN_CHANGE_INFO->value] ?? null;
        $canInviteUsers = $data[TelegramApiFieldEnum::CAN_INVITE_USERS->value] ?? null;
        $canPostStories = $data[TelegramApiFieldEnum::CAN_POST_STORIES->value] ?? null;
        $canEditStories = $data[TelegramApiFieldEnum::CAN_EDIT_STORIES->value] ?? null;
        $canDeleteStories = $data[TelegramApiFieldEnum::CAN_DELETE_STORIES->value] ?? null;
        $canPostMessages = $data[TelegramApiFieldEnum::CAN_POST_MESSAGES->value] ?? null;
        $canEditMessages = $data[TelegramApiFieldEnum::CAN_EDIT_MESSAGES->value] ?? null;
        $canPinMessages = $data[TelegramApiFieldEnum::CAN_PIN_MESSAGES->value] ?? null;
        $canManageTopics = $data[TelegramApiFieldEnum::CAN_MANAGE_TOPICS->value] ?? null;
        $customTitle = $data[TelegramApiFieldEnum::CUSTOM_TITLE->value] ?? null;

        $status = $this->filterString($status);
        $canBeEdited = $this->filterBoolean($canBeEdited);
        $isAnonymous = $this->filterBoolean($isAnonymous);
        $canManageChat = $this->filterBoolean($canManageChat);
        $canDeleteMessages = $this->filterBoolean($canDeleteMessages);
        $canManageVideoChats = $this->filterBoolean($canManageVideoChats);
        $canRestrictMembers = $this->filterBoolean($canRestrictMembers);
        $canPromoteMembers = $this->filterBoolean($canPromoteMembers);
        $canChangeInfo = $this->filterBoolean($canChangeInfo);
        $canInviteUsers = $this->filterBoolean($canInviteUsers);
        $canPostStories = $this->filterBoolean($canPostStories);
        $canEditStories = $this->filterBoolean($canEditStories);
        $canDeleteStories = $this->filterBoolean($canDeleteStories);
        $canPostMessages = $this->filterBoolean($canPostMessages);
        $canEditMessages = $this->filterBoolean($canEditMessages);
        $canPinMessages = $this->filterBoolean($canPinMessages);
        $canManageTopics = $this->filterBoolean($canManageTopics);
        $customTitle = $this->filterString($customTitle);

        return $this->typeFactory->create(
            $status,
            $user,
            $canBeEdited,
            $isAnonymous,
            $canManageChat,
            $canDeleteMessages,
            $canManageVideoChats,
            $canRestrictMembers,
            $canPromoteMembers,
            $canChangeInfo,
            $canInviteUsers,
            $canPostStories,
            $canEditStories,
            $canDeleteStories,
            $canPostMessages,
            $canEditMessages,
            $canPinMessages,
            $canManageTopics,
            $customTitle,
        );
    }
}
