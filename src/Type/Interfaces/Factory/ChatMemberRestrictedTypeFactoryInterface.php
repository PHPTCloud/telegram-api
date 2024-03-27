<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberRestrictedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Илья Пешко tcloud.ax@gmail.com
 */
interface ChatMemberRestrictedTypeFactoryInterface extends TypeFactoryInterface
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
    ): ChatMemberRestrictedInterface;
}
