# Метод getChatMemberCount

[<<< Назад](./../../)

## Общее

Ссылка: https://core.telegram.org/bots/api#getchatmembercount

Описание:
Используйте этот метод, чтобы получить количество участников в чате. Возвращает Int в случае успеха.

| Параметр | Тип        | Обязательный | Описание                                                                                                  |
|----------|------------|--------------|-----------------------------------------------------------------------------------------------------------|
| chat_id  | int/string | да           | Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername). | 


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/GetChatMemberCountMethodExample.php

```php
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

// Метод можно применять как на приватном чате, так и на группе.
$response = $manager->getChatMemberCount(new \PHPTCloud\TelegramApi\Argument\DataObject\ChatIdArgument($chatId));
dump($response);

$response = $manager->getChatMemberCount(new \PHPTCloud\TelegramApi\Argument\DataObject\ChatIdArgument($groupChatId));
dump($response);
```
