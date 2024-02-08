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

// Отправка запроса на удаление кнопок под полем ввода сообщения
$replyRemoveBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\ReplyKeyboardRemoveArgumentBuilder();
$message = $messageBuilder->setChatId($chatId)
    ->setText('Какой-то текст.')
    ->setReplyKeyboardRemove(
        $replyRemoveBuilder->wantRemoveKeyboard(true)
            ->build(),
    )
    ->build()
;
$result = $manager->sendMessage($message);
dump($result);
