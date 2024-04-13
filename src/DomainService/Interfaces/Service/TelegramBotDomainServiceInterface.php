<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotShortDescriptionInterface;
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
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyDefaultAdministratorRights.md
     */
    public function getMyDefaultAdministratorRights(
        GetMyDefaultAdministratorRightsArgumentInterface $argument
    ): ChatAdministratorRightsInterface;

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMyDefaultAdministratorRights.md
     */
    public function setMyDefaultAdministratorRights(SetMyDefaultAdministratorRightsArgumentInterface $argument): bool;

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyShortDescription.md
     */
    public function getMyShortDescription(?GetMyShortDescriptionArgumentInterface $argument = null): BotShortDescriptionInterface;

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMyShortDescription.md
     */
    public function setMyShortDescription(?SetMyShortDescriptionArgumentInterface $argument = null): bool;
}
