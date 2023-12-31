<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Factory;

use PHPTCloud\TelegramApi\DomainService\Interfaces\TelegramBotDomainServiceInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface TelegramBotDomainServiceFactoryInterface
{
    public function create(): TelegramBotDomainServiceInterface;
}
