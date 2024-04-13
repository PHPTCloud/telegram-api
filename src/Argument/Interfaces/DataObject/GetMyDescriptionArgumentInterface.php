<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface GetMyDescriptionArgumentInterface extends ArgumentInterface
{
    public function getLanguageCode(): ?string;
}
