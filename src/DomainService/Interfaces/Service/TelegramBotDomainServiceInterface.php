<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMyCommandsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyCommandsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyNameArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDefaultAdministratorRightsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyNameArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyShortDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotCommandInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotDescriptionInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotNameInterface;
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

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyDescription.md
     */
    public function getMyDescription(?GetMyDescriptionArgumentInterface $argument = null): BotDescriptionInterface;

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMyDescription.md
     */
    public function setMyDescription(?SetMyDescriptionArgumentInterface $argument = null): bool;

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyName.md
     */
    public function getMyName(?GetMyNameArgumentInterface $argument = null): BotNameInterface;

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMyName.md
     */
    public function setMyName(?SetMyNameArgumentInterface $argument = null): bool;

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyCommands.md
     * @return BotCommandInterface[]
     */
    public function getMyCommands(?GetMyCommandsArgumentInterface $argument = null): array;

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMyCommands.md
     */
    public function deleteMyCommands(?DeleteMyCommandsArgumentInterface $argument = null): bool;
}
