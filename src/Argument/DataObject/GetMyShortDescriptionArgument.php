<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyShortDescriptionArgumentInterface;

class GetMyShortDescriptionArgument implements GetMyShortDescriptionArgumentInterface
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
