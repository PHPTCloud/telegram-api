<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\AnimationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\AudioInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ContactInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\DiceInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\DocumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ExternalReplyInfoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GameInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GiveawayInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\GiveawayWinnersInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\InvoiceInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LinkPreviewOptionsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageOriginInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\PollInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\StickerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\StoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VenueInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VideoInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VideoNoteInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\VoiceInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект содержит информацию о сообщении, которое может прийти из другого чата или темы форума.
 *
 * @see    https://core.telegram.org/bots/api#externalreplyinfo
 */
class ExternalReplyInfo implements ExternalReplyInfoInterface
{
    public function __construct(
        private readonly MessageOriginInterface $origin,
        private readonly ?ChatInterface $chat = null,
        private readonly null|int|float $messageId = null,
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
        private readonly ?bool $mediaSpoiler = null,
        private readonly ?ContactInterface $contact = null,
        private readonly ?DiceInterface $dice = null,
        private readonly ?GameInterface $game = null,
        private readonly ?GiveawayInterface $giveaway = null,
        private readonly ?GiveawayWinnersInterface $giveawayWinners = null,
        private readonly ?InvoiceInterface $invoice = null,
        private readonly ?LocationInterface $location = null,
        private readonly ?PollInterface $poll = null,
        private readonly ?VenueInterface $venue = null,
    ) {
    }

    public function getOrigin(): MessageOriginInterface
    {
        return $this->origin;
    }

    public function getChat(): ?ChatInterface
    {
        return $this->chat;
    }

    public function getMessageId(): float|int|null
    {
        return $this->messageId;
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

    public function getGiveaway(): ?GiveawayInterface
    {
        return $this->giveaway;
    }

    public function getGiveawayWinners(): ?GiveawayWinnersInterface
    {
        return $this->giveawayWinners;
    }

    public function getInvoice(): ?InvoiceInterface
    {
        return $this->invoice;
    }

    public function getLocation(): ?LocationInterface
    {
        return $this->location;
    }

    public function getPoll(): ?PollInterface
    {
        return $this->poll;
    }

    public function getVenue(): ?VenueInterface
    {
        return $this->venue;
    }
}
