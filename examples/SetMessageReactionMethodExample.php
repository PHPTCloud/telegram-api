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
$messageBuilder = new PHPTCloud\TelegramApi\Argument\Builder\MessageArgumentBuilder();

$message = $manager->sendMessage(
    $messageBuilder->setChatId($chatId)
        ->setText('Простое текстовое сообщение.')
        ->build(),
);

$isOk = $manager->setMessageReaction(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SetMessageReactionArgument(
        $chatId,
        $message->getMessageId(),
        [
            new \PHPTCloud\TelegramApi\Argument\DataObject\ReactionTypeEmojiArgument('🔥'),
        ],
        false,
    ),
);
dump($isOk);
