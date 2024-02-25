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

$messagesCountForCopy = 10;
$messagesIds = [];

for ($i = 0; $i < $messagesCountForCopy; $i++) {
    $message = $manager->sendMessage(
        $messageBuilder->setChatId($chatId)
            ->setText(sprintf('Сообщение #%s, которое бот скопирует.', $i))
            ->build()
    );
    $messagesIds[] = $message->getMessageId();
}

$result = $manager->copyMessages(
    new \PHPTCloud\TelegramApi\Argument\DataObject\CopyMessagesArgument(
        $chatId,
        $chatId,
        $messagesIds,
    ),
    // Если вы не уверены в том, что message_ids является отсортированным массивом,
    // то вы можете использовать флаг для сортировки (По умолчанию используется алгоритм
    // TimSort).
    // @see PHPTCloud\TelegramApi\Utils\Service\TimSortAlgorithmService
    true,
);
dump($result);
