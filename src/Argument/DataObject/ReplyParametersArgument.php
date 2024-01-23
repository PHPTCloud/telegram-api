<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReplyParametersArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class ReplyParametersArgument implements ReplyParametersArgumentInterface
{
    public function __construct(
        protected readonly int|float $messageId,
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
