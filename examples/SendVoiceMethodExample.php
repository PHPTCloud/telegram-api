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

try {
    $message = $manager->sendVoice(
        new \PHPTCloud\TelegramApi\Argument\DataObject\SendVoiceArgument(
            chatId: $chatId,
            voice: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/audio-min.ogg'),
            caption: 'Обычная отправка голосового сообщения.'
        ),
    );
    dump($message);
} catch (\PHPTCloud\TelegramApi\Exception\Error\VoiceMessageForbiddenException $exception) {
    // При настройках по умолчанию отправка голосовых в боте не будет работать.
    // Чтобы это можно было сделать проверьте настройки своего бота.
    // С группами, каналами все будет работать, как обычно, если бот добавлен как админ.
    dump($exception);
}

$message = $manager->sendVoice(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendVoiceArgument(
        chatId: $groupChatId,
        voice: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/audio-min.ogg'),
        caption: 'Обычная отправка голосового сообщения.',
    ),
);
dump($message);

$inlineKeyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\InlineKeyboardMarkupArgumentBuilder();
$message = $manager->sendVoice(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendVoiceArgument(
        chatId: $groupChatId,
        voice: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__ . '/assets/audio-min.mp3'),
        caption: 'Отправка аудио файла с клавиатурой.',
        parseMode: \PHPTCloud\TelegramApi\FormattingLanguagesEnum::MARKDOWN->value,
        duration: 12,
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
