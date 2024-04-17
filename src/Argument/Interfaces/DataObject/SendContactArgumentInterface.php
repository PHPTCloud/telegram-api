<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SendContactArgumentInterface extends ArgumentInterface
{
    public function getBusinessConnectionId(): ?string;

    public function getChatId(): int|float|string;

    public function getMessageThreadId(): ?int;

    public function getPhoneNumber(): string;

    public function getFirstName(): string;

    public function getLastName(): ?string;

    public function getVcard(): ?string;

    public function isDisableNotification(): ?bool;

    public function isProtectContent(): ?bool;

    public function getReplyParameters(): ?ReplyParametersArgumentInterface;

    public function getReplyMarkup(): InlineKeyboardMarkupArgumentInterface|ReplyKeyboardMarkupArgumentInterface|ReplyKeyboardRemoveArgumentInterface|ForceReplyArgumentInterface|null;

    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupArgumentInterface;

    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface;

    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface;

    public function getForceReply(): ?ForceReplyArgumentInterface;
}
