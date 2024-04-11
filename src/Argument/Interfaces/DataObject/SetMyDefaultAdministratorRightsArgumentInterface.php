<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SetMyDefaultAdministratorRightsArgumentInterface extends ArgumentInterface
{
    public function getRights(): ?ChatAdministratorRightsArgumentInterface;

    public function isForChannels(): ?bool;
}
