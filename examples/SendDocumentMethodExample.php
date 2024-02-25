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
$inlineKeyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\InlineKeyboardMarkupArgumentBuilder();

// Обычная отправка документа.
$message = $manager->sendDocument(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendDocumentArgument(
        $chatId,
        new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/document-min.pdf'),
        null,
        'Текст сообщения.'
    ),
);
dump($message);

// Добавляем к документу клавиатуру и обложку
$message = $manager->sendDocument(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendDocumentArgument(
        $chatId,
        new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/document-min.pdf'),
        null,
        'Текст сообщения для документа с обложкой.',
        null,
        new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/photo-min.png'),
        \PHPTCloud\TelegramApi\FormattingLanguagesEnum::MARKDOWN->value,
        null,
        null,
        null,
        null,
        $inlineKeyboardBuilder->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка для документа.',
                null,
                'callback_data',
            ),
        )
        ->build(),
    ),
);
dump($message);
