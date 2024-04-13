<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDescriptionArgumentInterface;

class SetMyDescriptionArgument implements SetMyDescriptionArgumentInterface
{
    public function __construct(
        private readonly ?string $description = null,
        private readonly ?string $languageCode = null,
    ) {
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
}
