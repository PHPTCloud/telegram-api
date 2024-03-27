<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberRestrictedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * Представляет участника чата, на которого распространяются определенные ограничения в чате. Только су
 * пергруппы.
 *
 * @see    https://core.telegram.org/bots/api#chatmemberrestricted
 */
class ChatMemberRestricted extends ChatMember implements ChatMemberRestrictedInterface
{
    public function __construct(
        string $status,
        UserInterface $user,
        private readonly bool $isMember,
        private readonly bool $canSendMessages,
        private readonly bool $canSendAudios,
        private readonly bool $canSendDocuments,
        private readonly bool $canSendPhotos,
        private readonly bool $canSendVideos,
        private readonly bool $canSendVideoNotes,
        private readonly bool $canSendVoiceNotes,
        private readonly bool $canSendPolls,
        private readonly bool $canSendOtherMessages,
        private readonly bool $canAddWebPagePreviews,
        private readonly bool $canChangeInfo,
        private readonly bool $canInviteUsers,
        private readonly bool $canPinMessages,
        private readonly bool $canManageTopics,
        private readonly int $untilDate,
    ) {
        parent::__construct($status, $user);
    }

    public function isMember(): bool
    {
        return $this->isMember;
    }

    public function canSendMessages(): bool
    {
        return $this->canSendMessages;
    }

    public function canSendAudios(): bool
    {
        return $this->canSendAudios;
    }

    public function canSendDocuments(): bool
    {
        return $this->canSendDocuments;
    }

    public function canSendPhotos(): bool
    {
        return $this->canSendPhotos;
    }

    public function canSendVideos(): bool
    {
        return $this->canSendVideos;
    }

    public function canSendVideoNotes(): bool
    {
        return $this->canSendVideoNotes;
    }

    public function canSendVoiceNotes(): bool
    {
        return $this->canSendVoiceNotes;
    }

    public function canSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    public function canSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    public function canAddWebPagePreviews(): bool
    {
        return $this->canAddWebPagePreviews;
    }

    public function canChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function canInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function canPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    public function canManageTopics(): bool
    {
        return $this->canManageTopics;
    }

    public function getUntilDate(): int
    {
        return $this->untilDate;
    }
}
