<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDefaultAdministratorRightsArgumentInterface;

class GetMyDefaultAdministratorRightsArgument implements GetMyDefaultAdministratorRightsArgumentInterface
{
    public function __construct(
        private readonly ?bool $forChannels = null,
    ) {
    }

    public function isForChannels(): ?bool
    {
        return $this->forChannels;
    }
}
