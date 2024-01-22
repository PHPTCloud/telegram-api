<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
interface TelegramBotDomainServiceInterface extends DomainServiceInterface
{
    public function getMe(): UserInterface;

    public function logOut(): bool;

    public function close(): bool;
}
