<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface EditMessageMediaArgumentInterface extends ArgumentInterface
{
    public function getChatId(): int|float|string|null;

    public function getMessageId(): ?int;

    public function getInlineMessageId(): ?string;

    public function getMedia(): InputMediaAudioArgumentInterface|InputMediaPhotoArgumentInterface|InputMediaDocumentArgumentInterface|InputMediaVideoArgumentInterface;

    public function getReplyMarkup(): ?InlineKeyboardMarkupArgumentInterface;
}
