<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

if (!str_starts_with(phpversion(), '8')) {
    throw new \RuntimeException('Примеры использования библиотеки не работают с PHP ниже 8 версии.');
}

// Загружаем переменные из .env
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$token = $_ENV['TELEGRAM_BOT_TOKEN'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

$manager->SetMyDefaultAdministratorRights(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyDefaultAdministratorRightsArgument(
        new \PHPTCloud\TelegramApi\Argument\DataObject\ChatAdministratorRightsArgument(
            false,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
        ),
        false,
    ),
);

$response = $manager->getMyDefaultAdministratorRights(
    new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyDefaultAdministratorRightsArgument(false),
);
dump($response);

$manager->SetMyDefaultAdministratorRights(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyDefaultAdministratorRightsArgument(
        new \PHPTCloud\TelegramApi\Argument\DataObject\ChatAdministratorRightsArgument(
            false,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            false,
            false,
            false,
            false,
        ),
        true,
    ),
);

$response = $manager->getMyDefaultAdministratorRights(
    new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyDefaultAdministratorRightsArgument(true),
);
dump($response);
