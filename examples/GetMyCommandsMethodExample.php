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

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

$response = $manager->getMyCommands();
dump($response);

$response = $manager->getMyCommands(
    new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyCommandsArgument(
        new \PHPTCloud\TelegramApi\Argument\DataObject\BotCommandScopeChatArgument($chatId),
    ),
);
dump($response);
