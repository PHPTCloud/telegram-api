<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatAdministratorRightsInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Представляет права администратора в чате.
 *
 * @see     https://core.telegram.org/bots/api#chatadministratorrights
 */
class ChatAdministratorRights implements ChatAdministratorRightsInterface
{
    public function __construct(
        private readonly bool $anonymous,
        private readonly bool $manageChat,
        private readonly bool $deleteMessages,
        private readonly bool $manageVideoChats,
        private readonly bool $restrictMembers,
        private readonly bool $promoteMembers,
        private readonly bool $changeInfo,
        private readonly bool $inviteUsers,
        private readonly ?bool $postMessages = null,
        private readonly ?bool $editMessages = null,
        private readonly ?bool $pinMessages = null,
        private readonly ?bool $postStories = null,
        private readonly ?bool $editStories = null,
        private readonly ?bool $deleteStories = null,
        private readonly ?bool $manageTopics = null,
    ) {
    }

    public function isAnonymous(): bool
    {
        return $this->anonymous;
    }

    public function canManageChat(): bool
    {
        return $this->manageChat;
    }

    public function canDeleteMessages(): bool
    {
        return $this->deleteMessages;
    }

    public function canManageVideoChats(): bool
    {
        return $this->manageVideoChats;
    }

    public function canRestrictMembers(): bool
    {
        return $this->restrictMembers;
    }

    public function canPromoteMembers(): bool
    {
        return $this->promoteMembers;
    }

    public function canChangeInfo(): bool
    {
        return $this->changeInfo;
    }

    public function canInviteUsers(): bool
    {
        return $this->inviteUsers;
    }

    public function canPostMessages(): ?bool
    {
        return $this->postMessages;
    }

    public function canEditMessages(): ?bool
    {
        return $this->editMessages;
    }

    public function canPinMessages(): ?bool
    {
        return $this->pinMessages;
    }

    public function canPostStories(): ?bool
    {
        return $this->postStories;
    }

    public function canEditStories(): ?bool
    {
        return $this->editStories;
    }

    public function canDeleteStories(): ?bool
    {
        return $this->deleteStories;
    }

    public function canManageTopics(): ?bool
    {
        return $this->manageTopics;
    }
}
