<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface EditMessageCaptionArgumentInterface extends ArgumentInterface
{
    public function getChatId(): int|float|string|null;

    public function getMessageId(): ?int;

    public function getInlineMessageId(): ?string;

    public function getCaption(): ?string;

    public function getParseMode(): ?string;

    /**
     * @return MessageEntityArgumentInterface[]|null
     */
    public function getCaptionEntities(): ?array;

    public function getReplyMarkup(): ?InlineKeyboardMarkupArgumentInterface;
}
