<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Factory;

use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\TelegramBotDomainServiceInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface TelegramBotDomainServiceFactoryInterface
{
    public function create(): TelegramBotDomainServiceInterface;
}
