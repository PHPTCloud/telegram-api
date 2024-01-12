<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Factory\ChatTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatInterface;

class ChatDeserializer extends AbstractDeserializer implements ChatDeserializerInterface
{
    public function __construct(
        private readonly ChatTypeFactoryInterface $chatTypeFactory,
        private readonly ChatPhotoDeserializerInterface $chatPhotoDeserializer,
        private readonly ReactionTypeDeserializerInterface $reactionTypeDeserializer,
        private readonly MessageDeserializerInterface $messageDeserializer,
        private readonly ChatPermissionsDeserializerInterface $chatPermissionsDeserializer,
        private readonly ChatLocationDeserializerInterface $chatLocationDeserializer,
    ) {}

    public function deserialize(array $data): ChatInterface
    {
        $id = $data[TelegramApiFieldEnum::ID->value] ?? null;
        $type = $data[TelegramApiFieldEnum::TYPE->value] ?? null;
        $title = $data[TelegramApiFieldEnum::TITLE->value] ?? null;
        $username = $data[TelegramApiFieldEnum::USERNAME->value] ?? null;
        $firstName = $data[TelegramApiFieldEnum::FIRST_NAME->value] ?? null;
        $lastName = $data[TelegramApiFieldEnum::LAST_NAME->value] ?? null;
        $forum = $data[TelegramApiFieldEnum::IS_FORUM->value] ?? null;
        $photo = $data[TelegramApiFieldEnum::PHOTO->value] ?? null;
        $activeUsernames = $data[TelegramApiFieldEnum::ACTIVE_USERNAMES->value] ?? null;
        $availableReactions = $data[TelegramApiFieldEnum::AVAILABLE_REACTIONS->value] ?? null;
        $accentColorId = $data[TelegramApiFieldEnum::ACCENT_COLOR_ID->value] ?? null;
        $backgroundCustomEmojiId = $data[TelegramApiFieldEnum::BACKGROUND_CUSTOM_EMOJI_ID->value] ?? null;
        $profileAccentColorId = $data[TelegramApiFieldEnum::PROFILE_ACCENT_COLOR_ID->value] ?? null;
        $profileBackgroundCustomEmojiId = $data[TelegramApiFieldEnum::PROFILE_BACKGROUND_CUSTOM_EMOJI_ID->value] ?? null;
        $emojiStatusCustomEmojiId = $data[TelegramApiFieldEnum::EMOJI_STATUS_CUSTOM_EMOJI_ID->value] ?? null;
        $emojiStatusExpirationDate = $data[TelegramApiFieldEnum::EMOJI_STATUS_EXPIRATION_DATE->value] ?? null;
        $bio = $data[TelegramApiFieldEnum::BIO->value] ?? null;
        $privateForwards = $data[TelegramApiFieldEnum::HAS_PRIVATE_FORWARDS->value] ?? null;
        $restrictedVoiceAndVideoMessages = $data[TelegramApiFieldEnum::HAS_RESTRICTED_VOICE_AND_VIDEO_MESSAGES->value] ?? null;
        $joinToSendMessages = $data[TelegramApiFieldEnum::JOIN_TO_SEND_MESSAGES->value] ?? null;
        $joinByRequest = $data[TelegramApiFieldEnum::JOIN_BY_REQUEST->value] ?? null;
        $description = $data[TelegramApiFieldEnum::DESCRIPTION->value] ?? null;
        $inviteLink = $data[TelegramApiFieldEnum::INVITE_LINK->value] ?? null;
        $pinnedMessage = $data[TelegramApiFieldEnum::PINNED_MESSAGE->value] ?? null;
        $permissions = $data[TelegramApiFieldEnum::PERMISSIONS->value] ?? null;
        $slowModeDelay = $data[TelegramApiFieldEnum::SLOW_MODE_DELAY->value] ?? null;
        $messageAutoDeleteTime = $data[TelegramApiFieldEnum::MESSAGE_AUTO_DELETE_TIME->value] ?? null;
        $aggressiveAntiSpamEnabled = $data[TelegramApiFieldEnum::HAS_AGGRESSIVE_ANTI_SPAM_ENABLED->value] ?? null;
        $hiddenMembers = $data[TelegramApiFieldEnum::HAS_HIDDEN_MEMBERS->value] ?? null;
        $protectedContent = $data[TelegramApiFieldEnum::PROTECT_CONTENT->value] ?? null;
        $visibleHistory = $data[TelegramApiFieldEnum::HAS_VISIBLE_HISTORY->value] ?? null;
        $stickerSetName = $data[TelegramApiFieldEnum::STICKER_SET_NAME->value] ?? null;
        $setStickerSet = $data[TelegramApiFieldEnum::STICKER_SET_NAME->value] ?? null;
        $linkedChatId = $data[TelegramApiFieldEnum::LINKED_CHAT_ID->value] ?? null;
        $location = $data[TelegramApiFieldEnum::LOCATION->value] ?? null;

        $id = $this->filterNumeric($id);
        $type = $this->filterString($type);
        $title = $this->filterString($title);
        $username = $this->filterString($username);
        $firstName = $this->filterString($firstName);
        $lastName = $this->filterString($lastName);
        $forum = $this->filterBoolean($forum);
        if ($photo) {
            $photo = $this->chatPhotoDeserializer->deserialize($photo);
        }
        $activeUsernames = $this->filterArray($activeUsernames);
        $availableReactions = $this->filterArray($availableReactions);
        if (!empty($availableReactions)) {
            $availableReactions = $this->reactionTypeDeserializer->deserializeArrayOfTypes($availableReactions);
        }
        $accentColorId = $this->filterNumeric($accentColorId);
        $backgroundCustomEmojiId = $this->filterString($backgroundCustomEmojiId);
        $profileAccentColorId = $this->filterNumeric($profileAccentColorId);
        $profileBackgroundCustomEmojiId = $this->filterString($profileBackgroundCustomEmojiId);
        $emojiStatusCustomEmojiId = $this->filterString($emojiStatusCustomEmojiId);
        $emojiStatusExpirationDate = $this->filterNumeric($emojiStatusExpirationDate);
        $bio = $this->filterString($bio);
        $privateForwards = $this->filterBoolean($privateForwards);
        $restrictedVoiceAndVideoMessages = $this->filterBoolean($restrictedVoiceAndVideoMessages);
        $joinToSendMessages = $this->filterBoolean($joinToSendMessages);
        $joinByRequest = $this->filterBoolean($joinByRequest);
        $description = $this->filterString($description);
        $inviteLink = $this->filterString($inviteLink);
        $pinnedMessage = $this->filterArray($pinnedMessage);
        if (!empty($pinnedMessage)) {
            $pinnedMessage = $this->messageDeserializer->deserialize($pinnedMessage);
        }
        $permissions = $this->chatPermissionsDeserializer->deserialize($permissions);
        $slowModeDelay = $this->filterNumeric($slowModeDelay);
        $messageAutoDeleteTime = $this->filterNumeric($messageAutoDeleteTime);
        $aggressiveAntiSpamEnabled = $this->filterBoolean($aggressiveAntiSpamEnabled);
        $hiddenMembers = $this->filterBoolean($hiddenMembers);
        $protectedContent = $this->filterBoolean($protectedContent);
        $visibleHistory = $this->filterBoolean($visibleHistory);
        $stickerSetName = $this->filterBoolean($stickerSetName);
        $setStickerSet = $this->filterBoolean($setStickerSet);
        $linkedChatId = $this->filterNumeric($linkedChatId);
        $location = $this->filterArray($location);
        if (!empty($location)) {
            $location = $this->chatLocationDeserializer->deserialize($location);
        }

        return $this->chatTypeFactory->create(
            $id,
            $type,
            $title,
            $username,
            $firstName,
            $lastName,
            $forum,
            $photo,
            $activeUsernames,
            $availableReactions,
            $accentColorId,
            $backgroundCustomEmojiId,
            $profileAccentColorId,
            $profileBackgroundCustomEmojiId,
            $emojiStatusCustomEmojiId,
            $emojiStatusExpirationDate,
            $bio,
            $privateForwards,
            $restrictedVoiceAndVideoMessages,
            $joinToSendMessages,
            $joinByRequest,
            $description,
            $inviteLink,
            $pinnedMessage,
            $permissions,
            $slowModeDelay,
            $messageAutoDeleteTime,
            $aggressiveAntiSpamEnabled,
            $hiddenMembers,
            $protectedContent,
            $visibleHistory,
            $stickerSetName,
            $setStickerSet,
            $linkedChatId,
            $location,
        );
    }
}
