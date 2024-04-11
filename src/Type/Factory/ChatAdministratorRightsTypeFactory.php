<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatAdministratorRights;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatAdministratorRightsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatAdministratorRightsTypeFactoryInterface;

class ChatAdministratorRightsTypeFactory implements ChatAdministratorRightsTypeFactoryInterface
{
    public function create(
        bool $anonymous,
        bool $manageChat,
        bool $deleteMessages,
        bool $manageVideoChats,
        bool $restrictMembers,
        bool $promoteMembers,
        bool $changeInfo,
        bool $inviteUsers,
        bool $postMessages = null,
        bool $editMessages = null,
        bool $pinMessages = null,
        bool $postStories = null,
        bool $editStories = null,
        bool $deleteStories = null,
        bool $manageTopics = null,
    ): ChatAdministratorRightsInterface {
        return new ChatAdministratorRights(
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
