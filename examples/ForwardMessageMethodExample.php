<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Загружаем переменные из .env
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$token = $_ENV['TELEGRAM_BOT_TOKEN'];
$chatId = $_ENV['TELEGRAM_CHAT_ID'];
$fromChatId = $_ENV['TELEGRAM_NEWS_CHAT_ID'];
$fromMessageId = (int)$_ENV['TELEGRAM_NEW_MESSAGE_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);
$messageBuilder = new PHPTCloud\TelegramApi\Argument\Builder\MessageArgumentBuilder();

// Примечание: обратите внимание на то, что если вы будете пытаться переслать сообщение
// из других чатов, то может возникнуть ошибка BotIsNotAMemberOfTheChat или MessageCantBeForwarded.
// BotIsNotAMemberOfTheChat - возникнет, если бот не является участником канала.
// MessageCantBeForwarded - возникнет, если сообщение было защищено флагом protect_content.
$message = $messageBuilder->setChatId($chatId)
    ->setText('Текстовое сообщение, которое мы хоти переслать в этот же чат с ботом.')
    ->build();
$message = $manager->sendMessage($message);

$result = $manager->forwardMessage(new \PHPTCloud\TelegramApi\Argument\DataObject\ForwardMessageArgument(
    $chatId,
    $chatId,
    $message->getMessageId(),
));
dump($result);

$message = $messageBuilder->setChatId($chatId)
    ->setText('Защищенное сообщение, которое нельзя пересылать.')
    ->setContentProtected(true)
    ->build();
$message = $manager->sendMessage($message);

try {
    $result = $manager->forwardMessage(new \PHPTCloud\TelegramApi\Argument\DataObject\ForwardMessageArgument(
        $chatId,
        $chatId,
        $message->getMessageId(),
    ));
    dump($result);
} catch (\PHPTCloud\TelegramApi\Exception\Error\MessageCantBeForwardedException $exception) {
    dump($exception);
}
