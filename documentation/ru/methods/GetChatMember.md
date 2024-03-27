# Метод getChatMember

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#getchatmember

Описание:
Используйте этот метод, чтобы получить информацию об участнике чата. Способ гарантированно сработает для других пользователей только в том случае, если бот является администратором в чате. Возвращает объект ChatMember в случае успеха.

| Параметр | Тип        | Обязательный | Описание                                                                                                                  |
|----------|------------|--------------|---------------------------------------------------------------------------------------------------------------------------|
| chat_id  | int/string | да           | Уникальный идентификатор целевой группы или имя пользователя целевой супергруппы или канала (в формате @channelusername). | 
| user_id  | int        | да           | Уникальный идентификатор целевого пользователя.                                                                           | 


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/GetChatMemberMethodExample.php

```php
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
$chatId = $_ENV['TELEGRAM_GROUP_CHAT_ID'];
$userId = (int) $_ENV['TELEGRAM_GROUP_MEMBER_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

$response = $manager->getChatMember(
    new \PHPTCloud\TelegramApi\Argument\DataObject\GetChatMemberArgument($chatId, $userId),
);

dump($response);
```
