<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SetMyShortDescriptionArgumentInterface extends ArgumentInterface
{
    public function getShortDescription(): ?string;

    public function getLanguageCode(): ?string;
}
