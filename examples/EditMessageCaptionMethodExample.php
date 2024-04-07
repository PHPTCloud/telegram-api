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

$messageId = $manager->sendAnimation(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendAnimationArgument(
        chatId: $chatId,
        animation: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/video-min.mp4'),
        caption: 'Отправка анимации файла с клавиатурой.',
    ),
)->getMessageId();

usleep(350000);

$response = $manager->editMessageCaption(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageCaptionArgument(
        chatId: $chatId,
        messageId: $messageId,
        caption: 'Новый текст сообщения.',
    ),
);

dump($response);
