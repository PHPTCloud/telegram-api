<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReplyParametersInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Описывает параметры ответа для отправляемого сообщения.
 *
 * @see     https://core.telegram.org/bots/api#replyparameters
 */
class ReplyParameters implements ReplyParametersInterface
{
    public function __construct(
        protected readonly int|float $messageId,
        protected readonly int|float|string|null $chatId = null,
        protected readonly ?bool $allowedSendingWithoutReply = null,
        protected readonly ?string $quote = null,
        protected readonly ?string $quoteParseMode = null,
        protected readonly ?array $quoteEntities = null,
        protected readonly ?int $quotePosition = null,
    ) {
    }

    public function getMessageId(): float|int
    {
        return $this->messageId;
    }

    public function getChatId(): float|int|string|null
    {
        return $this->chatId;
    }

    public function isAllowedSendingWithoutReply(): ?bool
    {
        return $this->allowedSendingWithoutReply;
    }

    public function getQuote(): ?string
    {
        return $this->quote;
    }

    public function getQuoteParseMode(): ?string
    {
        return $this->quoteParseMode;
    }

    public function getQuoteEntities(): ?array
    {
        return $this->quoteEntities;
    }

    public function getQuotePosition(): ?int
    {
        return $this->quotePosition;
    }
}
