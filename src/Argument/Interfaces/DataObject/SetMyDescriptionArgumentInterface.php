<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SetMyDescriptionArgumentInterface extends ArgumentInterface
{
    public function getDescription(): ?string;

    public function getLanguageCode(): ?string;
}
