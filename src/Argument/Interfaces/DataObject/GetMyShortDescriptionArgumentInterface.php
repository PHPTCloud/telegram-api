<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface GetMyShortDescriptionArgumentInterface extends ArgumentInterface
{
    public function getLanguageCode(): ?string;
}
