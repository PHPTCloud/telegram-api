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

$message = $messageBuilder->setChatId($chatId)
    ->setText('Какой-то текст.')
    ->setInlineKeyboardMarkup(
        $inlineKeyboardBuilder->addButton(
            new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument(
                'Кнопка 1',
                'https://example.com',
            ),
        )
        ->build(),
    )
    ->build();
$message = $manager->sendMessage($message);

$result = $manager->copyMessage(
    new \PHPTCloud\TelegramApi\Argument\DataObject\CopyMessageArgument(
        $chatId,
        $chatId,
        $message->getMessageId(),
        null,
        \PHPTCloud\TelegramApi\FormattingLanguagesEnum::MARKDOWN->value,
        null,
        null,
        null,
        null,
        $message->getInlineKeyboardMarkup(),
        null,
    ),
);
dump($result);
