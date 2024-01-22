<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPermissionsInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Описывает действия, которые разрешено выполнять в чате пользователю, не являющемуся администратором.
 * @link    https://core.telegram.org/bots/api#chatpermissions
 */
class ChatPermissions implements ChatPermissionsInterface
{
    public function __construct(
        private readonly ?bool $sendMessages = null,
        private readonly ?bool $sendAudios = null,
        private readonly ?bool $sendDocuments = null,
        private readonly ?bool $sendPhotos = null,
        private readonly ?bool $sendVideos = null,
        private readonly ?bool $sendVideoNotes = null,
        private readonly ?bool $sendVoiceNotes = null,
        private readonly ?bool $sendPolls = null,
        private readonly ?bool $sendOtherMessages = null,
        private readonly ?bool $addWebPagePreviews = null,
        private readonly ?bool $changeInfo = null,
        private readonly ?bool $inviteUsers = null,
        private readonly ?bool $pinMessages = null,
        private readonly ?bool $manageTopics = null,
    ) {}

    public function canSendMessages(): ?bool
    {
        return $this->sendMessages;
    }

    public function canSendAudios(): ?bool
    {
        return $this->sendAudios;
    }

    public function canSendDocuments(): ?bool
    {
        return $this->sendDocuments;
    }

    public function canSendPhotos(): ?bool
    {
        return $this->sendPhotos;
    }

    public function canSendVideos(): ?bool
    {
        return $this->sendVideos;
    }

    public function canSendVideoNotes(): ?bool
    {
        return $this->sendVideoNotes;
    }

    public function canSendVoiceNotes(): ?bool
    {
        return $this->sendVoiceNotes;
    }

    public function canSendPolls(): ?bool
    {
        return $this->sendPolls;
    }

    public function canSendOtherMessages(): ?bool
    {
        return $this->sendOtherMessages;
    }

    public function canAddWebPagePreviews(): ?bool
    {
        return $this->addWebPagePreviews;
    }

    public function canChangeInfo(): ?bool
    {
        return $this->changeInfo;
    }

    public function canInviteUsers(): ?bool
    {
        return $this->inviteUsers;
    }

    public function canPinMessages(): ?bool
    {
        return $this->pinMessages;
    }

    public function canManageTopics(): ?bool
    {
        return $this->manageTopics;
    }
}
