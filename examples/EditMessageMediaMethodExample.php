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
$messageBuilder = new PHPTCloud\TelegramApi\Argument\Builder\MessageArgumentBuilder();

// Редактируем видео.
$messageId = $manager->sendVideo(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendVideoArgument(
        chatId: $chatId,
        video: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/video-min.mp4'),
        caption: 'Отправка видео #1.',
    ),
)->getMessageId();

usleep(350000);

$response = $manager->editMessageMedia(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageMediaArgument(
        media: new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaVideoArgument(
            media: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/video-min.mp4'),
            caption: 'Отправка видео #1.',
        ),
        chatId: $chatId,
        messageId: $messageId,
    ),
);

dump($response);

$messageId = $manager->sendPhoto(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendPhotoArgument(
        chatId: $chatId,
        photo: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/photo-min.png'),
        caption: 'Отправка фото №1.',
    ),
)->getMessageId();

usleep(350000);

$response = $manager->editMessageMedia(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageMediaArgument(
        media: new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaVideoArgument(
            media: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/photo-min.png'),
            caption: 'Отправка фото №2.',
        ),
        chatId: $chatId,
        messageId: $messageId,
    ),
);

dump($response);
