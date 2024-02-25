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
$inlineKeyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\InlineKeyboardMarkupArgumentBuilder();

// Пример отправки видео с клавиатурой и превью видео будет скрыто анти-спойлер эффектом.
$message = $manager->sendVideo(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendVideoArgument(
        chatId: $chatId,
        video: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/video-min.mp4'),
        caption: 'Отправка видео файла с клавиатурой.',
        spoiler: true,
        replyMarkup: $inlineKeyboardBuilder->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 1',
                'https://example.com',
            ),
        )
        ->build(),
    ),
);
dump($message);
