<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyKeyboardRemoveArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendContactArgumentInterface;

class SendContactArgument implements SendContactArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly string $phoneNumber,
        private readonly string $firstName,
        private readonly ?string $lastName = null,
        private readonly ?string $vcard = null,
        private readonly ?bool $disableNotification = null,
        private readonly ?bool $protectContent = null,
        private readonly ?int $messageThreadId = null,
        private readonly ?string $businessConnectionId = null,
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

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function getVcard(): ?string
    {
        return $this->vcard;
    }

    public function isDisableNotification(): ?bool
    {
        return $this->disableNotification;
    }

    public function isProtectContent(): ?bool
    {
        return $this->protectContent;
    }

    public function getMessageThreadId(): ?int
    {
        return $this->messageThreadId;
    }

    public function getBusinessConnectionId(): ?string
    {
        return $this->businessConnectionId;
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
