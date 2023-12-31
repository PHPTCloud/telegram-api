<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\DomainService\Factory\TelegramBotDomainServiceFactory;
use PHPTCloud\TelegramApi\Type\Factory\TypeFactoriesAbstractFactory;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class TelegramApiManagerFactory implements TelegramApiManagerFactoryInterface
{
    public static function create(
        string $token,
        string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
        ?string $username = null,
        ?string $name = null,
        ?string $description = null,
    ): TelegramApiManagerInterface {
        $botFactory = new TelegramBotFactory();
        $domainServiceFactory = new TelegramBotDomainServiceFactory(new DeserializersAbstractFactory(new TypeFactoriesAbstractFactory()));

        return new TelegramApiManager(
            $botFactory->create($token, $username, $name, $description),
            $domainServiceFactory,
        );
    }
}
