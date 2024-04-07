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

$messageId = $manager->sendMessage(
    $messageBuilder->setChatId($chatId)
        ->setText('Простое текстовое сообщение.')
        ->build()
)->getMessageId();

usleep(350000);

$response = $manager->editMessageText(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageTextArgument(
        $chatId,
        'Новый текст сообщения.',
        $messageId,
    ),
);

dump($response);

// Редактирование клавиатуры
$keyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\InlineKeyboardMarkupArgumentBuilder();

$keyboard = $keyboardBuilder->addButton(
    new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument('Кнопка 1', 'https://telegra.org'),
)->build();

$response = $manager->editMessageText(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageTextArgument(
        chatId: $chatId,
        text: 'Новый текст сообщения.',
        messageId: $messageId,
        replyMarkup: $keyboard,
    ),
);

dump($response);
