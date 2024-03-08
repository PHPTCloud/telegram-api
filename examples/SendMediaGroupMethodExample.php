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

$messages = $manager->sendMediaGroup(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendMediaGroupArgument(
        $chatId,
        [
            // Нужно отправлять минимум 2 элемента.
            new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaVideoArgument(
                new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/video-min.mp4'),
            ),
            new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaVideoArgument(
                new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/video-min.mp4'),
            ),
            new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaPhotoArgument(
                new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/photo-min.png'),
            ),
        ],
    ),
);
dump($messages);

// Миксовать аудио с другими типами нельзя.
try {
    $messages = $manager->sendMediaGroup(
        new \PHPTCloud\TelegramApi\Argument\DataObject\SendMediaGroupArgument(
            $chatId,
            [
                new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaVideoArgument(
                    new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/video-min.mp4'),
                ),
                new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaAudioArgument(
                    new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/audio-min.mp3'),
                ),
            ],
        ),
    );
} catch (\PHPTCloud\TelegramApi\Exception\Error\AudioCantBeMixedWithOtherTypesException $exception) {
    dump($exception);
}

// Миксовать документы с другими типами нельзя.
try {
    $messages = $manager->sendMediaGroup(
        new \PHPTCloud\TelegramApi\Argument\DataObject\SendMediaGroupArgument(
            $chatId,
            [
                new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaVideoArgument(
                    new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/video-min.mp4'),
                ),
                new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaDocumentArgument(
                    new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/document-min.pdf'),
                ),
            ],
        ),
    );
} catch (\PHPTCloud\TelegramApi\Exception\Error\DocumentCantBeMixedWithOtherTypesException $exception) {
    dump($exception);
}
