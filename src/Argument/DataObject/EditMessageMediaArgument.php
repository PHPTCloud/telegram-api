<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\EditMessageMediaArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardMarkupArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaAudioArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaDocumentArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InputMediaVideoArgumentInterface;

class EditMessageMediaArgument implements EditMessageMediaArgumentInterface
{
    public function __construct(
        private readonly InputMediaAudioArgumentInterface
                        |InputMediaPhotoArgumentInterface
                        |InputMediaDocumentArgumentInterface
                        |InputMediaVideoArgumentInterface $media,
        private readonly int|float|string|null $chatId = null,
        private readonly ?int $messageId = null,
        private readonly ?string $inlineMessageId = null,
        private readonly ?InlineKeyboardMarkupArgumentInterface $replyMarkup = null,
    ) {
    }

    public function getMedia(): InputMediaAudioArgumentInterface|InputMediaPhotoArgumentInterface|InputMediaDocumentArgumentInterface|InputMediaVideoArgumentInterface
    {
        return $this->media;
    }

    public function getChatId(): float|int|string|null
    {
        return $this->chatId;
    }

    public function getMessageId(): ?int
    {
        return $this->messageId;
    }

    public function getInlineMessageId(): ?string
    {
        return $this->inlineMessageId;
    }

    public function getReplyMarkup(): ?InlineKeyboardMarkupArgumentInterface
    {
        return $this->replyMarkup;
    }
}
