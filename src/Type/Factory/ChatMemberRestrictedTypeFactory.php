<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatMemberRestricted;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberRestrictedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberRestrictedTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberRestrictedTypeFactory implements ChatMemberRestrictedTypeFactoryInterface
{
    public function create(
        string $status,
        UserInterface $user,
        bool $isMember,
        bool $canSendMessages,
        bool $canSendAudios,
        bool $canSendDocuments,
        bool $canSendPhotos,
        bool $canSendVideos,
        bool $canSendVideoNotes,
        bool $canSendVoiceNotes,
        bool $canSendPolls,
        bool $canSendOtherMessages,
        bool $canAddWebPagePreviews,
        bool $canChangeInfo,
        bool $canInviteUsers,
        bool $canPinMessages,
        bool $canManageTopics,
        int $untilDate,
    ): ChatMemberRestrictedInterface {
        return new ChatMemberRestricted(
            $status,
            $user,
            $isMember,
            $canSendMessages,
            $canSendAudios,
            $canSendDocuments,
            $canSendPhotos,
            $canSendVideos,
            $canSendVideoNotes,
            $canSendVoiceNotes,
            $canSendPolls,
            $canSendOtherMessages,
            $canAddWebPagePreviews,
            $canChangeInfo,
            $canInviteUsers,
            $canPinMessages,
            $canManageTopics,
            $untilDate,
        );
    }
}
