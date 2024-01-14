<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\AnimationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\AudioInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatSharedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ContactInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DiceInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DocumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ExternalReplyInfoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ForumTopicClosedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ForumTopicCreatedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ForumTopicEditedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ForumTopicReopenedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\GameInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\GeneralForumTopicHiddenInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\GeneralForumTopicUnhiddenInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\GiveawayCompletedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\GiveawayCreatedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\GiveawayInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\GiveawayWinnersInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\InlineKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\InvoiceInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\LinkPreviewOptionsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\LocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MaybeInaccessibleMessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MessageAutoDeleteTimerChangedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MessageOriginInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\PassportDataInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\PollInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ProximityAlertTriggeredInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\StickerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\StoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\SuccessfulPaymentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\TextQuoteInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\UsersSharedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\VenueInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\VideoChatEndedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\VideoChatParticipantsInvitedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\VideoChatScheduledInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\VideoChatStartedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\VideoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\VideoNoteInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\VoiceInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\WebAppDataInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\WriteAccessAllowedInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface MessageTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        int|float                               $messageId,
        int                                     $date,
        ChatInterface                           $chat,
        int|float|null                          $messageThreadId = null,
        ?UserInterface                          $from = null,
        ?ChatInterface                          $senderChat = null,
        ?MessageOriginInterface                 $forwardOrigin = null,
        ?bool                                   $topicMessage = null,
        ?bool                                   $automaticForward = null,
        ?MessageInterface                       $replyToMessage = null,
        ?ExternalReplyInfoInterface             $externalReply = null,
        ?TextQuoteInterface                     $quote = null,
        ?UserInterface                          $viaBot = null,
        int|float|null                          $editDate = null,
        ?bool                                   $protectedContent = null,
        ?string                                 $mediaGroupId = null,
        ?string                                 $authorSignature = null,
        ?string                                 $text = null,
        ?array                                  $entities = null,
        ?LinkPreviewOptionsInterface            $linkPreviewOptions = null,
        ?AnimationInterface                     $animation = null,
        ?AudioInterface                         $audio = null,
        ?DocumentInterface                      $document = null,
        ?array                                  $photo = null,
        ?StickerInterface                       $sticker = null,
        ?StoryInterface                         $story = null,
        ?VideoInterface                         $video = null,
        ?VideoNoteInterface                     $videoNote = null,
        ?VoiceInterface                         $voice = null,
        ?string                                 $caption = null,
        ?array                                  $captionEntities = null,
        ?bool                                   $mediaSpoiler = null,
        ?ContactInterface                       $contact = null,
        ?DiceInterface                          $dice = null,
        ?GameInterface                          $game = null,
        ?PollInterface                          $poll = null,
        ?VenueInterface                         $venue = null,
        ?LocationInterface                      $location = null,
        ?array                                  $newChatMembers = null,
        ?UserInterface                          $leftChatMember = null,
        ?string                                 $newChatTitle = null,
        ?array                                  $newChatPhoto = null,
        ?bool                                   $deleteChatPhoto = null,
        ?bool                                   $groupChatCreated = null,
        ?bool                                   $supergroupChatCreated = null,
        ?bool                                   $channelChatCreated = null,
        ?MessageAutoDeleteTimerChangedInterface $messageAutoDeleteTimerChanged = null,
        null|int|float                          $migrateToChatId = null,
        null|int|float                          $migrateFromChatId = null,
        ?MaybeInaccessibleMessageInterface      $pinnedMessage = null,
        ?InvoiceInterface                       $invoice = null,
        ?SuccessfulPaymentInterface             $successfulPayment = null,
        ?UsersSharedInterface                   $usersShared = null,
        ?ChatSharedInterface                    $chatShared = null,
        ?string                                 $connectedWebsite = null,
        ?WriteAccessAllowedInterface            $writeAccessAllowed = null,
        ?PassportDataInterface                  $passportData = null,
        ?ProximityAlertTriggeredInterface       $proximityAlertTriggered = null,
        ?ForumTopicCreatedInterface             $forumTopicCreated = null,
        ?ForumTopicEditedInterface              $forumTopicEdited = null,
        ?ForumTopicClosedInterface              $forumTopicClosed = null,
        ?ForumTopicReopenedInterface            $forumTopicReopened = null,
        ?GeneralForumTopicHiddenInterface       $generalForumTopicHidden = null,
        ?GeneralForumTopicUnhiddenInterface     $generalForumTopicUnhidden = null,
        ?GiveawayCreatedInterface               $giveawayCreated = null,
        ?GiveawayInterface                      $giveaway = null,
        ?GiveawayWinnersInterface               $giveawayWinners = null,
        ?GiveawayCompletedInterface             $giveawayCompleted = null,
        ?VideoChatScheduledInterface            $videoChatScheduled = null,
        ?VideoChatStartedInterface              $videoChatStarted = null,
        ?VideoChatEndedInterface                $videoChatEnded = null,
        ?VideoChatParticipantsInvitedInterface  $videoChatParticipantsInvited = null,
        ?WebAppDataInterface                    $webAppData = null,
        ?InlineKeyboardMarkupInterface          $inlineKeyboardMarkup = null,
    ): MessageInterface;
}
