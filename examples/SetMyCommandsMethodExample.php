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
$chatId = $_ENV['TELEGRAM_CHAT_ID'];
$groupChatId = $_ENV['TELEGRAM_GROUP_CHAT_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);


// Пример создания команды для разных языков.

$manager->setMyCommands(new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyCommandsArgument(
    commands: [
        new \PHPTCloud\TelegramApi\Argument\DataObject\BotCommandArgument('command1', 'first command'),
    ],
    languageCode: 'en',
));

$response = $manager->getMyCommands(new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyCommandsArgument(
    languageCode: 'en',
));
dump($response);

$manager->setMyCommands(new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyCommandsArgument(
    commands: [
        new \PHPTCloud\TelegramApi\Argument\DataObject\BotCommandArgument('command1', 'первая команда'),
    ],
    languageCode: 'ru',
));

$response = $manager->getMyCommands(new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyCommandsArgument(
    languageCode: 'ru',
));
dump($response);


// Пример создания команды для разных пользовательских областей

$manager->setMyCommands(new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyCommandsArgument(
    commands: [
        new \PHPTCloud\TelegramApi\Argument\DataObject\BotCommandArgument('command2', 'second command'),
    ],
    scope: new \PHPTCloud\TelegramApi\Argument\DataObject\BotCommandScopeAllChatAdministratorsArgument(),
));

$response = $manager->getMyCommands(new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyCommandsArgument(
    scope: new \PHPTCloud\TelegramApi\Argument\DataObject\BotCommandScopeAllChatAdministratorsArgument(),
));
dump($response);
