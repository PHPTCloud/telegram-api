<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPermissionsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatPhotoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface ChatTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        int|float                 $id,
        string                    $type,
        ?string                   $title = null,
        ?string                   $username = null,
        ?string                   $firstName = null,
        ?string                   $lastName = null,
        ?bool                     $forum = null,
        ?ChatPhotoInterface       $photo = null,
        ?array                    $activeUsernames = null,
        ?array                    $availableReactions = null,
        ?int                      $accentColorId = null,
        ?string                   $backgroundCustomEmojiId = null,
        ?int                      $profileAccentColorId = null,
        ?string                   $profileBackgroundCustomEmojiId = null,
        ?string                   $emojiStatusCustomEmojiId = null,
        ?int                      $emojiStatusExpirationDate = null,
        ?string                   $bio = null,
        ?bool                     $privateForwards = null,
        ?bool                     $restrictedVoiceAndVideoMessages = null,
        ?bool                     $joinToSendMessages = null,
        ?bool                     $joinByRequest = null,
        ?string                   $description = null,
        ?string                   $inviteLink = null,
        ?MessageInterface         $pinnedMessage = null,
        ?ChatPermissionsInterface $permissions = null,
        ?int                      $slowModeDelay = null,
        ?int                      $messageAutoDeleteTime = null,
        ?bool                     $aggressiveAntiSpamEnabled = null,
        ?bool                     $hiddenMembers = null,
        ?bool                     $protectedContent = null,
        ?bool                     $visibleHistory = null,
        ?string                   $stickerSetName = null,
        ?bool                     $setStickerSet = null,
        ?int                      $linkedChatId = null,
        ?LocationInterface        $location = null,
    ): ChatInterface;
}
