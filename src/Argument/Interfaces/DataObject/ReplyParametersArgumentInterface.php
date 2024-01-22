<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface ReplyParametersArgumentInterface
{
    public function getMessageId(): int|float;

    public function isAllowedSendingWithoutReply(): ?bool;

    public function getQuote(): ?string;

    public function getQuoteParseMode(): ?string;

    /**
     * @return MessageEntityArgumentInterface|null
     */
    public function getQuoteEntities(): ?array;

    public function getQuotePosition(): ?int;
}
