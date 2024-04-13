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

$response = $manager->setMyDescription();
dump($response);

$response = $manager->setMyDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyDescriptionArgument(
    'Description.',
    'en',
));
$enDescription = $manager->getMyDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyDescriptionArgument('en'));
dump($enDescription);

$response = $manager->setMyDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyDescriptionArgument(
    'Короткое описание.',
    'ru',
));
$ruDescription = $manager->getMyDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyDescriptionArgument('ru'));
dump($ruDescription);
