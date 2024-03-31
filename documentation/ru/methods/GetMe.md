# Метод getMe

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#getme

Описание:

Простой метод проверки токена аутентификации вашего бота. Не требует параметров. Возвращает основную информацию о боте в виде объекта [User](https://core.telegram.org/bots/api#user).

## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/GetMeMethodExample.php

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

dump($manager->getMe());
```
