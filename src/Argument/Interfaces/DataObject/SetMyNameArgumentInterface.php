<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SetMyNameArgumentInterface extends ArgumentInterface
{
    public function getName(): ?string;

    public function getLanguageCode(): ?string;
}
