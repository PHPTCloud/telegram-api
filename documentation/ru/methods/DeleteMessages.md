# Метод deleteMessages

## Общее

Ссылка: https://core.telegram.org/bots/api#deletemessages

Описание:
Используйте этот метод для одновременного удаления нескольких сообщений. Если некоторые из указанных сообщений не удается найти, они пропускаются. Возвращает True в случае успеха.

| Параметр    | Тип        | Обязательный | Описание                                                                                                                                                                                                                                                                   |
|-------------|------------|--------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| chat_id     | int/string | Да           | Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername).                                                                                                                                                                  |
| message_ids | int[]      | Да           | Сериализованный в формате JSON список из 1–100 идентификаторов сообщений, которые нужно удалить. См. [deleteMessage](https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMessage.md), чтобы узнать об ограничениях на удаление сообщений. |       


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/DeleteMessagesMethodExample.php

```php
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

// Для создания простого текстового сообщения можно не использовать MessageArgumentBuilder. Однако, что
// бы соблюдать уровень сцепления модулей рекомендую не привязываться к конкретным реализациям и исполь
// зовать билдеры и фабрики.
$message = $messageBuilder->setChatId($chatId)
    ->setText('Простое текстовое сообщение.')
    ->build();
$message = $manager->sendMessage($message);

$response = $manager->deleteMessages(
    new \PHPTCloud\TelegramApi\Argument\DataObject\DeleteMessagesArgument($chatId, [$message->getMessageId()]),
);

dump($response);
```
