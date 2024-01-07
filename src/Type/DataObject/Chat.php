<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatPermissionsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatPhotoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\LocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой чат.
 * @link    https://core.telegram.org/bots/api#chat
 */
class Chat implements ChatInterface
{
    public function __construct(
        private readonly int|float                 $id,
        private readonly string                    $type,
        private readonly ?string                   $title = null,
        private readonly ?string                   $username = null,
        private readonly ?string                   $firstName = null,
        private readonly ?string                   $lastName = null,
        private readonly ?bool                     $forum = null,
        private readonly ?ChatPhotoInterface       $photo = null,
        private readonly ?array                    $activeUsernames = null,
        private readonly ?array                    $availableReactions = null,
        private readonly ?int                      $accentColorId = null,
        private readonly ?string                   $backgroundCustomEmojiId = null,
        private readonly ?int                      $profileAccentColorId = null,
        private readonly ?string                   $profileBackgroundCustomEmojiId = null,
        private readonly ?string                   $emojiStatusCustomEmojiId = null,
        private readonly ?int                      $emojiStatusExpirationDate = null,
        private readonly ?string                   $bio = null,
        private readonly ?bool                     $privateForwards = null,
        private readonly ?bool                     $restrictedVoiceAndVideoMessages = null,
        private readonly ?bool                     $joinToSendMessages = null,
        private readonly ?bool                     $joinByRequest = null,
        private readonly ?string                   $description = null,
        private readonly ?string                   $inviteLink = null,
        private readonly ?MessageInterface         $pinnedMessage = null,
        private readonly ?ChatPermissionsInterface $permissions = null,
        private readonly ?int                      $slowModeDelay = null,
        private readonly ?int                      $messageAutoDeleteTime = null,
        private readonly ?bool                     $aggressiveAntiSpamEnabled = null,
        private readonly ?bool                     $hiddenMembers = null,
        private readonly ?bool                     $protectedContent = null,
        private readonly ?bool                     $visibleHistory = null,
        private readonly ?string                   $stickerSetName = null,
        private readonly ?bool                     $setStickerSet = null,
        private readonly ?int                      $linkedChatId = null,
        private readonly ?LocationInterface        $location = null,
    ) {}

    public function getId(): float|int
    {
        return $this->id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function isForum(): ?bool
    {
        return $this->forum;
    }

    public function getPhoto(): ?ChatPhotoInterface
    {
        return $this->photo;
    }

    public function getActiveUsernames(): ?array
    {
        return $this->activeUsernames;
    }

    public function getAvailableReactions(): ?array
    {
        return $this->availableReactions;
    }

    public function getAccentColorId(): ?int
    {
        return $this->accentColorId;
    }

    public function getBackgroundCustomEmojiId(): ?string
    {
        return $this->backgroundCustomEmojiId;
    }

    public function getProfileAccentColorId(): ?int
    {
        return $this->profileAccentColorId;
    }

    public function getProfileBackgroundCustomEmojiId(): ?string
    {
        return $this->profileBackgroundCustomEmojiId;
    }

    public function getEmojiStatusCustomEmojiId(): ?string
    {
        return $this->emojiStatusCustomEmojiId;
    }

    public function getEmojiStatusExpirationDate(): ?int
    {
        return $this->emojiStatusExpirationDate;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function hasPrivateForwards(): ?bool
    {
        return $this->privateForwards;
    }

    public function hasRestrictedVoiceAndVideoMessages(): ?bool
    {
        return $this->restrictedVoiceAndVideoMessages;
    }

    public function isJoinToSendMessages(): ?bool
    {
        return $this->joinToSendMessages;
    }

    public function isJoinByRequest(): ?bool
    {
        return $this->joinByRequest;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getInviteLink(): ?string
    {
        return $this->inviteLink;
    }

    public function getPinnedMessage(): ?MessageInterface
    {
        return $this->pinnedMessage;
    }

    public function getPermissions(): ?ChatPermissionsInterface
    {
        return $this->permissions;
    }

    public function getSlowModeDelay(): ?int
    {
        return $this->slowModeDelay;
    }

    public function getMessageAutoDeleteTime(): ?int
    {
        return $this->messageAutoDeleteTime;
    }

    public function hasAggressiveAntiSpamEnabled(): ?bool
    {
        return $this->aggressiveAntiSpamEnabled;
    }

    public function hasHiddenMembers(): ?bool
    {
        return $this->hiddenMembers;
    }

    public function hasProtectedContent(): ?bool
    {
        return $this->protectedContent;
    }

    public function hasVisibleHistory(): ?bool
    {
        return $this->visibleHistory;
    }

    public function getStickerSetName(): ?string
    {
        return $this->stickerSetName;
    }

    public function canSetStickerSet(): ?bool
    {
        return $this->setStickerSet;
    }

    public function getLinkedChatId(): ?int
    {
        return $this->linkedChatId;
    }

    public function getLocation(): ?LocationInterface
    {
        return $this->location;
    }
}
