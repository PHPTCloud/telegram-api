<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendVenueArgumentInterface;

class SendVenueArgument implements SendVenueArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly float $latitude,
        private readonly float $longitude,
        private readonly string $title,
        private readonly string $address,
        private readonly ?int $messageThreadId = null,
        private readonly ?string $businessConnectionId = null,
        private readonly ?string $foursquareId = null,
        private readonly ?string $foursquareType = null,
        private readonly ?string $googlePlaceId = null,
        private readonly ?string $googlePlaceType = null,
        private readonly ?bool $disableNotification = null,
        private readonly ?bool $protectContent = null,
        private readonly ?ReplyParametersArgumentInterface $replyParameters = null,
        private readonly InlineKeyboardMarkupArgumentInterface
                        |ReplyKeyboardMarkupArgumentInterface
                        |ReplyKeyboardRemoveArgumentInterface
                        |ForceReplyArgumentInterface
                        |null $replyMarkup = null,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }

    public function getBusinessConnectionId(): ?string
    {
        return $this->businessConnectionId;
    }

    public function getFoursquareId(): ?string
    {
        return $this->foursquareId;
    }

    public function getFoursquareType(): ?string
    {
        return $this->foursquareType;
    }

    public function getGooglePlaceId(): ?string
    {
        return $this->googlePlaceId;
    }

    public function getGooglePlaceType(): ?string
    {
        return $this->googlePlaceType;
    }

    public function isDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    public function isProtectContent(): ?bool
    {
        return $this->protectContent;
    }

    public function getReplyParameters(): ?ReplyParametersArgumentInterface
    {
        return $this->replyParameters;
    }

    public function getReplyMarkup(): ReplyKeyboardMarkupArgumentInterface|ReplyKeyboardRemoveArgumentInterface|ForceReplyArgumentInterface|InlineKeyboardMarkupArgumentInterface|null
    {
        return $this->replyMarkup;
    }

    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup;
    }

    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup;
    }

    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface
    {
        return $this->replyMarkup;
    }

    public function getForceReply(): ?ForceReplyArgumentInterface
    {
        return $this->replyMarkup;
    }
}
