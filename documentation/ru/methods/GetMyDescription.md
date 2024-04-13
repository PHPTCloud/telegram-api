# Метод getMyDescription

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#getmydescription

Описание:

Используйте этот метод, чтобы получить текущее описание бота для данного языка пользователя. Возвращает [BotDescription](https://core.telegram.org/bots/api#botdescription) в случае успеха.

| Параметр      | Тип    | Обязательный | Описание                                             |
|---------------|--------|--------------|------------------------------------------------------|
| language_code | string | нет          | Двухбуквенный код языка ISO 639-1 или пустая строка. | 


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/GetMyDescriptionMethodExample.php

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
$chatId = $_ENV['TELEGRAM_CHAT_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

$response = $manager->getMyDescription();
dump($response);
```
