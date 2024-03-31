# Метод getChat

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#getchat

Описание:

Используйте этот метод, чтобы получать актуальную информацию о чате. Возвращает объект Chat в случае успеха.

| Параметр | Тип          | Обязательный | Описание                                                                                                                 |
|----------|--------------|--------------|--------------------------------------------------------------------------------------------------------------------------|
| chat_id  | string / int | да           | Уникальный идентификатор целевого чата или имя пользователя целевой супергруппы или канала (в формате @channelusername). | 


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/GetChatMethodExample.php

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

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

dump($manager->getChat(new PHPTCloud\TelegramApi\Argument\DataObject\ChatIdArgument($chatId)));
```
