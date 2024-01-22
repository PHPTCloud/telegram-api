<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Factory;

use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\MessageDomainServiceInterface;
use PHPTCloud\TelegramApi\TelegramApiManagerInterface;
use PHPTCloud\TelegramApi\TelegramBotInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface MessageDomainServiceFactoryInterface
{
    public function create(
        ?TelegramBotInterface $telegramBot = null,
        ?string               $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
    ): MessageDomainServiceInterface;
}
