<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForceReplyInterface;

class ForceReply implements ForceReplyInterface
{
    public function __construct(
        private readonly bool $forceReply = true,
        private readonly ?string $inputFieldPlaceholder = null,
        private readonly ?bool $selective = null,
    ) {
    }

    public function isForceReply(): bool
    {
        return $this->forceReply;
    }

    public function getInputFieldPlaceholder(): ?string
    {
        return $this->inputFieldPlaceholder;
    }

    public function isSelective(): ?bool
    {
        return $this->selective;
    }
}
