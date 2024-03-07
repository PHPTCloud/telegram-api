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

// Ловим ошибку, так как бот не может удалить фото приватного чата
try {
    $manager->deleteChatPhoto(new PHPTCloud\TelegramApi\Argument\DataObject\ChatIdArgument($chatId));
} catch (\PHPTCloud\TelegramApi\Exception\Error\CantChangePrivateChatPhotoException $exception) {
    dump($exception->getMessage());
}

// Удаление фото группы, в которой бот был добавлен как администратор.
// При отсутствии фотографии в группе ловим ошибку, так как бот не может удалить фото группы
try {
    $response = $manager->deleteChatPhoto(new PHPTCloud\TelegramApi\Argument\DataObject\ChatIdArgument($groupChatId));
    dump($response);
} catch (\PHPTCloud\TelegramApi\Exception\Error\ChatNotModifiedException $exception) {
    dump($exception->getMessage());
}
