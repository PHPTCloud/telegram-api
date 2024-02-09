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

$messageCountForForward = 5;
$messageIds = [];

// Отправим N сообщений и запишем их ID, чтобы потом проверить как работает
// множественная пересылка сообщений через бота.
for ($i = 0; $i < $messageCountForForward; $i++) {
    $message = $manager->sendMessage(
        $messageBuilder->setChatId($chatId)
            ->setText(
                sprintf(
                    'Текстовое сообщение #%s, которое мы хоти переслать в этот же чат с ботом.',
                    $i,
                ),
            )
            ->build()
    );
    $messageIds[] =$message->getMessageId();
}

// Намеренно нарушаем порядок идентификаторов. Если не установить флаг sortIds = true
// методе forwardMessages, то возникнет ошибка MessageIdsMustBeInIncreasingOrder.
$messageIds = array_reverse($messageIds);

$result = $manager->forwardMessages(
    new \PHPTCloud\TelegramApi\Argument\DataObject\ForwardMessagesArgument(
        $chatId,
        $chatId,
        $messageIds,
    ),
    // Если вы не уверены в том, что message_ids является отсортированным массивом,
    // то вы можете использовать флаг для сортировки (По умолчанию используется алгоритм
    // TimSort).
    // @see PHPTCloud\TelegramApi\Utils\Service\TimSortAlgorithmService
    true,
);
dump($result);
