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

$inlineKeyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\InlineKeyboardMarkupArgumentBuilder();
$message = $manager->sendAudio(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendAudioArgument(
        $chatId,
        new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/audio-min.mp3'),
        'Отправка аудио файла с клавиатурой.',
        \PHPTCloud\TelegramApi\FormattingLanguagesEnum::MARKDOWN->value,
        null,
        12,
        'AI Generated Voice',
        'О Telegram.',
        new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/photo-min.png'),
        null,
        null,
        null,
        $inlineKeyboardBuilder->addButton(
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
