<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

interface MessageInterface
{
    public function getMessageId(): int|float;

    public function getMessageThreadId(): int|float|null;

    public function getFrom(): ?UserInterface;

    public function getSenderChat(): ?ChatInterface;

    public function getDate(): int|float;

    public function getChat(): ChatInterface;

    public function getForwardOrigin(): ?MessageOriginInterface;

    public function isTopicMessage(): ?bool;

    public function isAutomaticForward(): ?bool;

    public function getReplyToMessage(): ?MessageInterface;

    public function getExternalReply(): ?ExternalReplyInfoInterface;

    public function getTextQuote(): ?TextQuoteInterface;

    public function getViaBot(): ?UserInterface;

    public function getEditDate(): int|float|null;

    public function hasProtectedContent(): ?bool;

    public function getMediaGroupId(): ?string;

    public function getAuthorSignature(): ?string;

    public function getText(): ?string;

    /**
     * @return null|MessageEntityInterface[]
     */
    public function getEntities(): ?array;

    public function getLinkPreviewOptions(): ?LinkPreviewOptionsInterface;

    public function getAnimation(): ?AnimationInterface;

    public function getAudio(): ?AudioInterface;

    public function getDocument(): ?DocumentInterface;

    /**
     * @return PhotoSizeInterface[]|null
     */
    public function getPhotoSize(): ?array;

    public function getSticker(): ?StickerInterface;

    public function getStory(): ?StoryInterface;

    public function getVideo(): ?VideoInterface;

    public function getVideoNote(): ?VideoNoteInterface;

    public function getVoice(): ?VoiceInterface;

    public function getCaption(): ?string;

    /**
     * @return MessageEntityInterface[]|null
     */
    public function getCaptionEntities(): ?array;

    public function hasMediaSpoiler(): ?bool;

    public function getContact(): ?ContactInterface;

    public function getDice(): ?DiceInterface;

    public function getGame(): ?GameInterface;

    public function getPoll(): ?PollInterface;

    public function getVenue(): ?VenueInterface;

    public function getLocation(): ?LocationInterface;

    /**
     * @return UserInterface[]|null
     */
    public function getNewChatMembers(): ?array;

    public function getLeftChatMember(): ?UserInterface;

    public function getNewChatTitle(): ?string;

    /**
     * @return PhotoSizeInterface[]|null
     */
    public function getNewChatPhoto(): ?array;

    public function isDeleteChatPhoto(): ?bool;

    public function isGroupChatCreated(): ?bool;

    public function isSupergroupChatCreated(): ?bool;

    public function isChannelChatCreated(): ?bool;

    public function getMessageAutoDeleteTimerChanged(): ?MessageAutoDeleteTimerChangedInterface;

    public function getMigrateToChatId(): null|int|float;

    public function getMigrateFromChatId(): null|int|float;

    public function getPinnedMessage(): ?MaybeInaccessibleMessageInterface;

    public function getInvoice(): ?InvoiceInterface;

    public function getSuccessfulPayment(): ?SuccessfulPaymentInterface;

    public function getUsersShared(): ?UsersSharedInterface;

    public function getChatShared(): ?ChatSharedInterface;

    public function getConnectedWebsite(): ?string;

    public function getWriteAccessAllowed(): ?WriteAccessAllowedInterface;

    public function getPassportData(): ?PassportDataInterface;

    public function getProximityAlertTriggered(): ?ProximityAlertTriggeredInterface;

    public function getForumTopicCreated(): ?ForumTopicCreatedInterface;

    public function getForumTopicEdited(): ?ForumTopicEditedInterface;

    public function getForumTopicClosed(): ?ForumTopicClosedInterface;

    public function getForumTopicReopened(): ?ForumTopicReopenedInterface;

    public function getGeneralForumTopicHidden(): ?GeneralForumTopicHiddenInterface;

    public function getGeneralForumTopicUnhidden(): ?GeneralForumTopicUnhiddenInterface;

    public function getGiveawayCreated(): ?GiveawayCreatedInterface;

    public function getGiveaway(): ?GiveawayInterface;

    public function getGiveawayWinners(): ?GiveawayWinnersInterface;

    public function getGiveawayCompleted(): ?GiveawayCompletedInterface;

    public function getVideoChatScheduled(): ?VideoChatScheduledInterface;

    public function getVideoChatStarted(): ?VideoChatStartedInterface;

    public function getVideoChatEnded(): ?VideoChatEndedInterface;

    public function getVideoChatParticipantsInvited(): ?VideoChatParticipantsInvitedInterface;

    public function getWebAppData(): ?WebAppDataInterface;

    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupInterface;
}
