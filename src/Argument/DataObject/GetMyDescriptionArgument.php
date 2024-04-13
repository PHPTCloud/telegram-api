<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDescriptionArgumentInterface;

class GetMyDescriptionArgument implements GetMyDescriptionArgumentInterface
{
    public function __construct(
        private readonly ?string $languageCode = null,
    ) {
    }

    public function getLanguageCode(): ?string
    {
        return $this->languageCode;
    }
}
