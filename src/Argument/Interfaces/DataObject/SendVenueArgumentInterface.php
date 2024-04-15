<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SendVenueArgumentInterface extends ArgumentInterface
{
    public function getBusinessConnectionId(): ?string;

    public function getChatId(): int|float|string;

    public function getMessageThreadId(): ?int;

    public function getLatitude(): float;

    public function getLongitude(): float;

    public function getTitle(): string;

    public function getAddress(): string;

    public function getFoursquareId(): ?string;

    public function getFoursquareType(): ?string;

    public function getGooglePlaceId(): ?string;

    public function getGooglePlaceType(): ?string;

    public function isDisableNotification(): ?bool;

    public function isProtectContent(): ?bool;

    public function getReplyParameters(): ?ReplyParametersArgumentInterface;

    public function getReplyMarkup(): InlineKeyboardMarkupArgumentInterface|ReplyKeyboardMarkupArgumentInterface|ReplyKeyboardRemoveArgumentInterface|ForceReplyArgumentInterface|null;

    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupArgumentInterface;

    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface;

    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface;

    public function getForceReply(): ?ForceReplyArgumentInterface;
}
