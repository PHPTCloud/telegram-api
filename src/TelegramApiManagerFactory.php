<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Argument\Factory\SerializersAbstractFactory;
use PHPTCloud\TelegramApi\DomainService\Factory\ChatDomainServiceFactory;
use PHPTCloud\TelegramApi\DomainService\Factory\MessageDomainServiceFactory;
use PHPTCloud\TelegramApi\DomainService\Factory\TelegramBotDomainServiceFactory;
use PHPTCloud\TelegramApi\Exception\Factory\ExceptionAbstractFactory;
use PHPTCloud\TelegramApi\Type\Factory\DeserializersAbstractFactory;
use PHPTCloud\TelegramApi\Type\Factory\TypeFactoriesAbstractFactory;
use PHPTCloud\TelegramApi\Utils\Factory\SortingAlgorithmServiceFactory;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class TelegramApiManagerFactory implements TelegramApiManagerFactoryInterface
{
    public static function create(
        string $token,
        string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
        string $username = null,
        string $name = null,
        string $description = null,
    ): TelegramApiManagerInterface {
        $botFactory = new TelegramBotFactory();
        $deserializersAbstractFactory = new DeserializersAbstractFactory(new TypeFactoriesAbstractFactory());
        $serializersAbstractFactory = new SerializersAbstractFactory();

        $telegramBotDomainServiceFactory = new TelegramBotDomainServiceFactory($deserializersAbstractFactory);
        $messageDomainServiceFactory = new MessageDomainServiceFactory(
            $deserializersAbstractFactory,
            $serializersAbstractFactory,
            new ExceptionAbstractFactory(),
            new SortingAlgorithmServiceFactory(),
        );

        $chatDomainServiceFactory = new ChatDomainServiceFactory(
            $deserializersAbstractFactory,
            $serializersAbstractFactory,
            new ExceptionAbstractFactory(),
        );

        return new TelegramApiManager(
            $botFactory->create($token, $username, $name, $description),
            $telegramBotDomainServiceFactory,
            $messageDomainServiceFactory,
            $chatDomainServiceFactory,
        );
    }
}
