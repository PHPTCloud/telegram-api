<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDefaultAdministratorRightsArgumentInterface;

class SetMyDefaultAdministratorRightsArgument implements SetMyDefaultAdministratorRightsArgumentInterface
{
    public function __construct(
        private readonly ?ChatAdministratorRightsArgumentInterface $rights = null,
        private readonly ?bool $forChannels = null,
    ) {
    }

    public function getRights(): ?ChatAdministratorRightsArgumentInterface
    {
        return $this->rights;
    }

    public function isForChannels(): ?bool
    {
        return $this->forChannels;
    }
}
