<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyShortDescriptionArgumentInterface;

class SetMyShortDescriptionArgument implements SetMyShortDescriptionArgumentInterface
{
    public function __construct(
        private readonly ?string $shortDescription = null,
        private readonly ?string $languageCode = null,
    ) {
    }

    public function getShortDescription(): ?string
    {
        return $this->shortDescription;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
}
