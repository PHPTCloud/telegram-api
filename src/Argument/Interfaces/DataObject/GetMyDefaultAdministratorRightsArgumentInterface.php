<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface GetMyDefaultAdministratorRightsArgumentInterface extends ArgumentInterface
{
    public function isForChannels(): ?bool;
}
