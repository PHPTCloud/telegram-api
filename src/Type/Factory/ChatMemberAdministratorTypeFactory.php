<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatMemberAdministrator;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberAdministratorInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberAdministratorTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberAdministratorTypeFactory implements ChatMemberAdministratorTypeFactoryInterface
{
    public function create(
        string $status,
        UserInterface $user,
        bool $canBeEdited,
        bool $isAnonymous,
        bool $canManageChat,
        bool $canDeleteMessages,
        bool $canManageVideoChats,
        bool $canRestrictMembers,
        bool $canPromoteMembers,
        bool $canChangeInfo,
        bool $canInviteUsers,
        bool $canPostStories,
        bool $canEditStories,
        bool $canDeleteStories,
        ?bool $canPostMessages,
        ?bool $canEditMessages,
        ?bool $canPinMessages,
        ?bool $canManageTopics,
        ?string $customTitle,
    ): ChatMemberAdministratorInterface {
        return new ChatMemberAdministrator(
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
