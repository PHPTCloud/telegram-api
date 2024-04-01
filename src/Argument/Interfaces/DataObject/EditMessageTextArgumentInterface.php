<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface EditMessageTextArgumentInterface extends ArgumentInterface
{
    public function getChatId(): int|float|string|null;

    public function getMessageId(): ?int;

    public function getInlineMessageId(): ?string;

    public function getText(): string;

    public function getParseMode(): ?string;

    /**
     * @return MessageEntityArgumentInterface[]|null
     */
    public function getEntities(): ?array;

    public function getLinkPreviewOptions(): ?LinkPreviewOptionsArgumentInterface;

    public function getReplyMarkup(): ?InlineKeyboardMarkupArgumentInterface;
}
