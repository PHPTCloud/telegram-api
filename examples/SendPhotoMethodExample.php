<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Загружаем переменные из .env
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$token = $_ENV['TELEGRAM_BOT_TOKEN'];
$chatId = $_ENV['TELEGRAM_CHAT_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);
$messageBuilder = new PHPTCloud\TelegramApi\Argument\Builder\MessageArgumentBuilder();

// Отправка файла с локального диска.
$message = $manager->sendPhoto(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendPhotoArgument(
        $chatId,
        new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(
            __DIR__ . '/assets/photo-min.png',
        ),
        null,
        'Локальный файл.',
        null,
        null,
        true,
    ),
);
dump($message);

// Отправка файла по URL.
$message = $manager->sendPhoto(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendPhotoArgument(
        $chatId,
        'https://osx.telegram.org/updates/site/artboard.png',
        null,
        'Файл из Интернета файл.',
        null,
        null,
        true,
    ),
);
dump($message);
