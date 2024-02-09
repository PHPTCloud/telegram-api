<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ForceReplyArgumentInterface;

class ForceReplyArgument implements ForceReplyArgumentInterface
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
