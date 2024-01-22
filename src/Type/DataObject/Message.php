<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

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

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет сообщение.
 *
 * @see    https://core.telegram.org/bots/api#message
 */
class Message implements MessageInterface
{
    public function __construct(
        private readonly int|float $messageId,
        private readonly int $date,
        private readonly ChatInterface $chat,
        private readonly int|float|null $messageThreadId = null,
        private readonly ?UserInterface $from = null,
        private readonly ?ChatInterface $senderChat = null,
        private readonly ?MessageOriginInterface $forwardOrigin = null,
        private readonly ?bool $topicMessage = null,
        private readonly ?bool $automaticForward = null,
        private readonly ?MessageInterface $replyToMessage = null,
        private readonly ?ExternalReplyInfoInterface $externalReply = null,
        private readonly ?TextQuoteInterface $quote = null,
        private readonly ?UserInterface $viaBot = null,
        private readonly int|float|null $editDate = null,
        private readonly ?bool $protectedContent = null,
        private readonly ?string $mediaGroupId = null,
        private readonly ?string $authorSignature = null,
        private readonly ?string $text = null,
        private readonly ?array $entities = null,
        private readonly ?LinkPreviewOptionsInterface $linkPreviewOptions = null,
        private readonly ?AnimationInterface $animation = null,
        private readonly ?AudioInterface $audio = null,
        private readonly ?DocumentInterface $document = null,
        private readonly ?array $photo = null,
        private readonly ?StickerInterface $sticker = null,
        private readonly ?StoryInterface $story = null,
        private readonly ?VideoInterface $video = null,
        private readonly ?VideoNoteInterface $videoNote = null,
        private readonly ?VoiceInterface $voice = null,
        private readonly ?string $caption = null,
        private readonly ?array $captionEntities = null,
        private readonly ?bool $mediaSpoiler = null,
        private readonly ?ContactInterface $contact = null,
        private readonly ?DiceInterface $dice = null,
        private readonly ?GameInterface $game = null,
        private readonly ?PollInterface $poll = null,
        private readonly ?VenueInterface $venue = null,
        private readonly ?LocationInterface $location = null,
        private readonly ?array $newChatMembers = null,
        private readonly ?UserInterface $leftChatMember = null,
        private readonly ?string $newChatTitle = null,
        private readonly ?array $newChatPhoto = null,
        private readonly ?bool $deleteChatPhoto = null,
        private readonly ?bool $groupChatCreated = null,
        private readonly ?bool $supergroupChatCreated = null,
        private readonly ?bool $channelChatCreated = null,
        private readonly ?MessageAutoDeleteTimerChangedInterface $messageAutoDeleteTimerChanged = null,
        private readonly null|int|float $migrateToChatId = null,
        private readonly null|int|float $migrateFromChatId = null,
        private readonly ?MaybeInaccessibleMessageInterface $pinnedMessage = null,
        private readonly ?InvoiceInterface $invoice = null,
        private readonly ?SuccessfulPaymentInterface $successfulPayment = null,
        private readonly ?UsersSharedInterface $usersShared = null,
        private readonly ?ChatSharedInterface $chatShared = null,
        private readonly ?string $connectedWebsite = null,
        private readonly ?WriteAccessAllowedInterface $writeAccessAllowed = null,
        private readonly ?PassportDataInterface $passportData = null,
        private readonly ?ProximityAlertTriggeredInterface $proximityAlertTriggered = null,
        private readonly ?ForumTopicCreatedInterface $forumTopicCreated = null,
        private readonly ?ForumTopicEditedInterface $forumTopicEdited = null,
        private readonly ?ForumTopicClosedInterface $forumTopicClosed = null,
        private readonly ?ForumTopicReopenedInterface $forumTopicReopened = null,
        private readonly ?GeneralForumTopicHiddenInterface $generalForumTopicHidden = null,
        private readonly ?GeneralForumTopicUnhiddenInterface $generalForumTopicUnhidden = null,
        private readonly ?GiveawayCreatedInterface $giveawayCreated = null,
        private readonly ?GiveawayInterface $giveaway = null,
        private readonly ?GiveawayWinnersInterface $giveawayWinners = null,
        private readonly ?GiveawayCompletedInterface $giveawayCompleted = null,
        private readonly ?VideoChatScheduledInterface $videoChatScheduled = null,
        private readonly ?VideoChatStartedInterface $videoChatStarted = null,
        private readonly ?VideoChatEndedInterface $videoChatEnded = null,
        private readonly ?VideoChatParticipantsInvitedInterface $videoChatParticipantsInvited = null,
        private readonly ?WebAppDataInterface $webAppData = null,
        private readonly ?InlineKeyboardMarkupInterface $inlineKeyboardMarkup = null,
    ) {
    }

    public function getMessageId(): float|int
    {
        return $this->messageId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getChat(): ChatInterface
    {
        return $this->chat;
    }

    public function getMessageThreadId(): float|int|null
    {
        return $this->messageThreadId;
    }

    public function getFrom(): ?UserInterface
    {
        return $this->from;
    }

    public function getSenderChat(): ?ChatInterface
    {
        return $this->senderChat;
    }

    public function getForwardOrigin(): ?MessageOriginInterface
    {
        return $this->forwardOrigin;
    }

    public function isTopicMessage(): ?bool
    {
        return $this->topicMessage;
    }

    public function isAutomaticForward(): ?bool
    {
        return $this->automaticForward;
    }

    public function getReplyToMessage(): ?MessageInterface
    {
        return $this->replyToMessage;
    }

    public function getExternalReply(): ?ExternalReplyInfoInterface
    {
        return $this->externalReply;
    }

    public function getQuote(): ?TextQuoteInterface
    {
        return $this->quote;
    }

    public function getViaBot(): ?UserInterface
    {
        return $this->viaBot;
    }

    public function getEditDate(): float|int|null
    {
        return $this->editDate;
    }

    public function hasProtectedContent(): ?bool
    {
        return $this->protectedContent;
    }

    public function getMediaGroupId(): ?string
    {
        return $this->mediaGroupId;
    }

    public function getAuthorSignature(): ?string
    {
        return $this->authorSignature;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function getEntities(): ?array
    {
        return $this->entities;
    }

    public function getLinkPreviewOptions(): ?LinkPreviewOptionsInterface
    {
        return $this->linkPreviewOptions;
    }

    public function getAnimation(): ?AnimationInterface
    {
        return $this->animation;
    }

    public function getAudio(): ?AudioInterface
    {
        return $this->audio;
    }

    public function getDocument(): ?DocumentInterface
    {
        return $this->document;
    }

    public function getPhoto(): ?array
    {
        return $this->photo;
    }

    public function getSticker(): ?StickerInterface
    {
        return $this->sticker;
    }

    public function getStory(): ?StoryInterface
    {
        return $this->story;
    }

    public function getVideo(): ?VideoInterface
    {
        return $this->video;
    }

    public function getVideoNote(): ?VideoNoteInterface
    {
        return $this->videoNote;
    }

    public function getVoice(): ?VoiceInterface
    {
        return $this->voice;
    }

    public function getCaption(): ?string
    {
        return $this->caption;
    }

    public function getCaptionEntities(): ?array
    {
        return $this->captionEntities;
    }

    public function hasMediaSpoiler(): ?bool
    {
        return $this->mediaSpoiler;
    }

    public function getContact(): ?ContactInterface
    {
        return $this->contact;
    }

    public function getDice(): ?DiceInterface
    {
        return $this->dice;
    }

    public function getGame(): ?GameInterface
    {
        return $this->game;
    }

    public function getPoll(): ?PollInterface
    {
        return $this->poll;
    }

    public function getVenue(): ?VenueInterface
    {
        return $this->venue;
    }

    public function getLocation(): ?LocationInterface
    {
        return $this->location;
    }

    public function getNewChatMembers(): ?array
    {
        return $this->newChatMembers;
    }

    public function getLeftChatMember(): ?UserInterface
    {
        return $this->leftChatMember;
    }

    public function getNewChatTitle(): ?string
    {
        return $this->newChatTitle;
    }

    public function getNewChatPhoto(): ?array
    {
        return $this->newChatPhoto;
    }

    public function isDeleteChatPhoto(): ?bool
    {
        return $this->deleteChatPhoto;
    }

    public function isGroupChatCreated(): ?bool
    {
        return $this->groupChatCreated;
    }

    public function isSupergroupChatCreated(): ?bool
    {
        return $this->supergroupChatCreated;
    }

    public function isChannelChatCreated(): ?bool
    {
        return $this->channelChatCreated;
    }

    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChangedInterface
    {
        return $this->messageAutoDeleteTimerChanged;
    }

    public function getMigrateToChatId(): float|int|null
    {
        return $this->migrateToChatId;
    }

    public function getMigrateFromChatId(): float|int|null
    {
        return $this->migrateFromChatId;
    }

    public function getPinnedMessage(): ?MaybeInaccessibleMessageInterface
    {
        return $this->pinnedMessage;
    }

    public function getInvoice(): ?InvoiceInterface
    {
        return $this->invoice;
    }

    public function getSuccessfulPayment(): ?SuccessfulPaymentInterface
    {
        return $this->successfulPayment;
    }

    public function getUsersShared(): ?UsersSharedInterface
    {
        return $this->usersShared;
    }

    public function getChatShared(): ?ChatSharedInterface
    {
        return $this->chatShared;
    }

    public function getConnectedWebsite(): ?string
    {
        return $this->connectedWebsite;
    }

    public function getWriteAccessAllowed(): ?WriteAccessAllowedInterface
    {
        return $this->writeAccessAllowed;
    }

    public function getPassportData(): ?PassportDataInterface
    {
        return $this->passportData;
    }

    public function getProximityAlertTriggered(): ?ProximityAlertTriggeredInterface
    {
        return $this->proximityAlertTriggered;
    }

    public function getForumTopicCreated(): ?ForumTopicCreatedInterface
    {
        return $this->forumTopicCreated;
    }

    public function getForumTopicEdited(): ?ForumTopicEditedInterface
    {
        return $this->forumTopicEdited;
    }

    public function getForumTopicClosed(): ?ForumTopicClosedInterface
    {
        return $this->forumTopicClosed;
    }

    public function getForumTopicReopened(): ?ForumTopicReopenedInterface
    {
        return $this->forumTopicReopened;
    }

    public function getGeneralForumTopicHidden(): ?GeneralForumTopicHiddenInterface
    {
        return $this->generalForumTopicHidden;
    }

    public function getGeneralForumTopicUnhidden(): ?GeneralForumTopicUnhiddenInterface
    {
        return $this->generalForumTopicUnhidden;
    }

    public function getGiveawayCreated(): ?GiveawayCreatedInterface
    {
        return $this->giveawayCreated;
    }

    public function getGiveaway(): ?GiveawayInterface
    {
        return $this->giveaway;
    }

    public function getGiveawayWinners(): ?GiveawayWinnersInterface
    {
        return $this->giveawayWinners;
    }

    public function getGiveawayCompleted(): ?GiveawayCompletedInterface
    {
        return $this->giveawayCompleted;
    }

    public function getVideoChatScheduled(): ?VideoChatScheduledInterface
    {
        return $this->videoChatScheduled;
    }

    public function getVideoChatStarted(): ?VideoChatStartedInterface
    {
        return $this->videoChatStarted;
    }

    public function getVideoChatEnded(): ?VideoChatEndedInterface
    {
        return $this->videoChatEnded;
    }

    public function getVideoChatParticipantsInvited(): ?VideoChatParticipantsInvitedInterface
    {
        return $this->videoChatParticipantsInvited;
    }

    public function getWebAppData(): ?WebAppDataInterface
    {
        return $this->webAppData;
    }

    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupInterface
    {
        return $this->inlineKeyboardMarkup;
    }
}
