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

// Ловим ошибку, так как бот не может покидать приватный чат
try {
    $manager->leaveChat(new PHPTCloud\TelegramApi\Argument\DataObject\ChatIdArgument($chatId));
} catch (\PHPTCloud\TelegramApi\Exception\Error\ChatMemberStatusCantBeChangedInPrivateChatsException $exception) {
    dump($exception->getMessage());
}

// Выход из группы, куда бот был добавлен как участник.
$response = $manager->leaveChat(new PHPTCloud\TelegramApi\Argument\DataObject\ChatIdArgument($groupChatId));
dump($response);
