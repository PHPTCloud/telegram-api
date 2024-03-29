<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatPermissions;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPermissionsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatPermissionsTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ChatPermissionsTypeFactory implements ChatPermissionsTypeFactoryInterface
{
    public function create(
        bool $sendMessages = null,
        bool $sendAudios = null,
        bool $sendDocuments = null,
        bool $sendPhotos = null,
        bool $sendVideos = null,
        bool $sendVideoNotes = null,
        bool $sendVoiceNotes = null,
        bool $sendPolls = null,
        bool $sendOtherMessages = null,
        bool $addWebPagePreviews = null,
        bool $changeInfo = null,
        bool $inviteUsers = null,
        bool $pinMessages = null,
        bool $manageTopics = null,
    ): ChatPermissionsInterface {
        return new ChatPermissions(
            $sendMessages,
            $sendAudios,
            $sendDocuments,
            $sendPhotos,
            $sendVideos,
            $sendVideoNotes,
            $sendVoiceNotes,
            $sendPolls,
            $sendOtherMessages,
            $addWebPagePreviews,
            $changeInfo,
            $inviteUsers,
            $pinMessages,
            $manageTopics,
        );
    }
}
