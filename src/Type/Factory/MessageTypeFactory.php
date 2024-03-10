<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\Message;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\AnimationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\AudioInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatSharedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ContactInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\DiceInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\DocumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ExternalReplyInfoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForumTopicClosedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForumTopicCreatedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForumTopicEditedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForumTopicReopenedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GameInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GeneralForumTopicHiddenInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GeneralForumTopicUnhiddenInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GiveawayCompletedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GiveawayCreatedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GiveawayInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GiveawayWinnersInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\InlineKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\InvoiceInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LinkPreviewOptionsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MaybeInaccessibleMessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageAutoDeleteTimerChangedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageOriginInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\PassportDataInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\PollInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ProximityAlertTriggeredInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\StickerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\StoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\SuccessfulPaymentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\TextQuoteInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UsersSharedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VenueInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VideoChatEndedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VideoChatParticipantsInvitedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VideoChatScheduledInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VideoChatStartedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VideoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VideoNoteInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VoiceInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WebAppDataInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WriteAccessAllowedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MessageTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class MessageTypeFactory implements MessageTypeFactoryInterface
{
    public function create(
        int|float $messageId,
        int $date,
        ChatInterface $chat,
        int|float $messageThreadId = null,
        UserInterface $from = null,
        ChatInterface $senderChat = null,
        MessageOriginInterface $forwardOrigin = null,
        bool $topicMessage = null,
        bool $automaticForward = null,
        MessageInterface $replyToMessage = null,
        ExternalReplyInfoInterface $externalReply = null,
        TextQuoteInterface $quote = null,
        UserInterface $viaBot = null,
        int|float $editDate = null,
        bool $protectedContent = null,
        string $mediaGroupId = null,
        string $authorSignature = null,
        string $text = null,
        array $entities = null,
        LinkPreviewOptionsInterface $linkPreviewOptions = null,
        AnimationInterface $animation = null,
        AudioInterface $audio = null,
        DocumentInterface $document = null,
        array $photo = null,
        StickerInterface $sticker = null,
        StoryInterface $story = null,
        VideoInterface $video = null,
        VideoNoteInterface $videoNote = null,
        VoiceInterface $voice = null,
        string $caption = null,
        array $captionEntities = null,
        bool $mediaSpoiler = null,
        ContactInterface $contact = null,
        DiceInterface $dice = null,
        GameInterface $game = null,
        PollInterface $poll = null,
        VenueInterface $venue = null,
        LocationInterface $location = null,
        array $newChatMembers = null,
        UserInterface $leftChatMember = null,
        string $newChatTitle = null,
        array $newChatPhoto = null,
        bool $deleteChatPhoto = null,
        bool $groupChatCreated = null,
        bool $supergroupChatCreated = null,
        bool $channelChatCreated = null,
        MessageAutoDeleteTimerChangedInterface $messageAutoDeleteTimerChanged = null,
        int|float $migrateToChatId = null,
        int|float $migrateFromChatId = null,
        MaybeInaccessibleMessageInterface $pinnedMessage = null,
        InvoiceInterface $invoice = null,
        SuccessfulPaymentInterface $successfulPayment = null,
        UsersSharedInterface $usersShared = null,
        ChatSharedInterface $chatShared = null,
        string $connectedWebsite = null,
        WriteAccessAllowedInterface $writeAccessAllowed = null,
        PassportDataInterface $passportData = null,
        ProximityAlertTriggeredInterface $proximityAlertTriggered = null,
        ForumTopicCreatedInterface $forumTopicCreated = null,
        ForumTopicEditedInterface $forumTopicEdited = null,
        ForumTopicClosedInterface $forumTopicClosed = null,
        ForumTopicReopenedInterface $forumTopicReopened = null,
        GeneralForumTopicHiddenInterface $generalForumTopicHidden = null,
        GeneralForumTopicUnhiddenInterface $generalForumTopicUnhidden = null,
        GiveawayCreatedInterface $giveawayCreated = null,
        GiveawayInterface $giveaway = null,
        GiveawayWinnersInterface $giveawayWinners = null,
        GiveawayCompletedInterface $giveawayCompleted = null,
        VideoChatScheduledInterface $videoChatScheduled = null,
        VideoChatStartedInterface $videoChatStarted = null,
        VideoChatEndedInterface $videoChatEnded = null,
        VideoChatParticipantsInvitedInterface $videoChatParticipantsInvited = null,
        WebAppDataInterface $webAppData = null,
        InlineKeyboardMarkupInterface $inlineKeyboardMarkup = null,
    ): MessageInterface {
        return new Message(
            $messageId,
            $date,
            $chat,
            $messageThreadId,
            $from,
            $senderChat,
            $forwardOrigin,
            $topicMessage,
            $automaticForward,
            $replyToMessage,
            $externalReply,
            $quote,
            $viaBot,
            $editDate,
            $protectedContent,
            $mediaGroupId,
            $authorSignature,
            $text,
            $entities,
            $linkPreviewOptions,
            $animation,
            $audio,
            $document,
            $photo,
            $sticker,
            $story,
            $video,
            $videoNote,
            $voice,
            $caption,
            $captionEntities,
            $mediaSpoiler,
            $contact,
            $dice,
            $game,
            $poll,
            $venue,
            $location,
            $newChatMembers,
            $leftChatMember,
            $newChatTitle,
            $newChatPhoto,
            $deleteChatPhoto,
            $groupChatCreated,
            $supergroupChatCreated,
            $channelChatCreated,
            $messageAutoDeleteTimerChanged,
            $migrateToChatId,
            $migrateFromChatId,
            $pinnedMessage,
            $invoice,
            $successfulPayment,
            $usersShared,
            $chatShared,
            $connectedWebsite,
            $writeAccessAllowed,
            $passportData,
            $proximityAlertTriggered,
            $forumTopicCreated,
            $forumTopicEdited,
            $forumTopicClosed,
            $forumTopicReopened,
            $generalForumTopicHidden,
            $generalForumTopicUnhidden,
            $giveawayCreated,
            $giveaway,
            $giveawayWinners,
            $giveawayCompleted,
            $videoChatScheduled,
            $videoChatStarted,
            $videoChatEnded,
            $videoChatParticipantsInvited,
            $webAppData,
            $inlineKeyboardMarkup,
        );
    }
}
