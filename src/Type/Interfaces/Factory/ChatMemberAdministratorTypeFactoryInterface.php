<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberAdministratorInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Илья Пешко tcloud.ax@gmail.com
 */
interface ChatMemberAdministratorTypeFactoryInterface extends TypeFactoryInterface
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
    ): ChatMemberAdministratorInterface;
}
