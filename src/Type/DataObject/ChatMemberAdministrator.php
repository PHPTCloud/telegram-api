<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberAdministratorInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Представляет участника чата, имеющего некоторые дополнительные привилегии.
 *
 * @see    https://core.telegram.org/bots/api#chatmemberadministrator
 */
class ChatMemberAdministrator extends ChatMember implements ChatMemberAdministratorInterface
{
    public function __construct(
        string $status,
        UserInterface $user,
        private readonly bool $edited,
        private readonly bool $anonymous,
        private readonly bool $manageChat,
        private readonly bool $deleteMessages,
        private readonly bool $manageVideoChats,
        private readonly bool $restrictMembers,
        private readonly bool $promoteMembers,
        private readonly bool $changeInfo,
        private readonly bool $inviteUsers,
        private readonly ?bool $postMessages,
        private readonly ?bool $editMessages,
        private readonly ?bool $pinMessages,
        private readonly ?bool $postStories,
        private readonly ?bool $editStories,
        private readonly ?bool $deleteStories,
        private readonly ?bool $manageTopics,
        private readonly ?string $customTitle,
    ) {
        parent::__construct($status, $user);
    }

    public function canBeEdited(): bool
    {
        return $this->edited;
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

    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }
}
