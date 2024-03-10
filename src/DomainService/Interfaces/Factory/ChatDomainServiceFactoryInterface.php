<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Factory;

use PHPTCloud\TelegramApi\DomainService\Interfaces\Service\ChatDomainServiceInterface;
use PHPTCloud\TelegramApi\TelegramApiManagerInterface;
use PHPTCloud\TelegramApi\TelegramBotInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
interface ChatDomainServiceFactoryInterface
{
    public function create(
        TelegramBotInterface $telegramBot = null,
        ?string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
    ): ChatDomainServiceInterface;
}
