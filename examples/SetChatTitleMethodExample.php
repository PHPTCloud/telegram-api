<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Загружаем переменные из .env
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$token = $_ENV['TELEGRAM_BOT_TOKEN'];
$chatId = $_ENV['TELEGRAM_CHAT_ID'];
$groupChatId = $_ENV['TELEGRAM_GROUP_CHAT_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

// Ловим ошибку, так как нельзя менять название приватного чата
try {
    $manager->setChatTitle(new \PHPTCloud\TelegramApi\Argument\DataObject\SetChatTitleArgument($chatId, 'New title'));
} catch (\PHPTCloud\TelegramApi\Exception\Error\CantChangePrivateChatTitleException $exception) {
    dump($exception->getMessage());
}

// Установка нового названия группы, куда бот был добавлен как администратор.
$response = $manager->setChatTitle(new \PHPTCloud\TelegramApi\Argument\DataObject\SetChatTitleArgument($groupChatId, 'New title'));
dump($response);
