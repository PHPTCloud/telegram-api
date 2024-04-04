<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatAdministratorRightsInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface TelegramBotDomainServiceInterface extends DomainServiceInterface
{
    public function getMe(): UserInterface;

    public function logOut(): bool;

    public function close(): bool;

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/getMyDefaultAdministratorRights.md
     */
    public function getMyDefaultAdministratorRights(
        GetMyDefaultAdministratorRightsArgumentInterface $argument
    ): ChatAdministratorRightsInterface;
}
