<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatAdministratorRightsInterface;

interface ChatAdministratorRightsTypeFactoryInterface extends TypeFactoryInterface
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
        ?bool $postMessages = null,
        ?bool $editMessages = null,
        ?bool $pinMessages = null,
        ?bool $postStories = null,
        ?bool $editStories = null,
        ?bool $deleteStories = null,
        ?bool $manageTopics = null,
    ): ChatAdministratorRightsInterface;
}
