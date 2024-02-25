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
$message = $manager->sendAudio(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendAudioArgument(
        chatId: $chatId,
        audio: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/audio-min.mp3'),
        caption: 'Отправка аудио файла с клавиатурой.',
        parseMode: \PHPTCloud\TelegramApi\FormattingLanguagesEnum::MARKDOWN->value,
        duration: 12,
        performer: 'AI Generated Voice',
        title: 'О Telegram.',
        thumbnail: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/photo-min.png'),
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

$message = $manager->sendAudio(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendAudioArgument(
        $chatId,
        new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/audio-min.mp3'),
        'Обычная отправка аудио файла.'
    ),
);
dump($message);

$message = $manager->sendAudio(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendAudioArgument(
        $chatId,
        new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/audio-min.mp3'),
        'Отправка аудио файла с постером.',
        null,
        null,
        12,
        'AI Generated Voice',
        'О Telegram.',
        new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/photo-min.png'),
    ),
);
dump($message);
