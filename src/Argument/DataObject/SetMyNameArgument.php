<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyNameArgumentInterface;

class SetMyNameArgument implements SetMyNameArgumentInterface
{
    public function __construct(
        private readonly ?string $name = null,
        private readonly ?string $languageCode = null,
    ) {
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
}
