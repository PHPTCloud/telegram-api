# Метод logOut

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#logout

Описание:

Используйте этот метод для выхода из облачного сервера API бота перед локальным запуском бота. Вы должны выйти из системы бота перед его локальным запуском, иначе нет никакой гарантии, что бот будет получать обновления. После успешного вызова вы сразу сможете авторизоваться на локальном сервере, но не сможете зайти обратно на сервер Cloud Bot API в течение 10 минут. Возвращает True в случае успеха. Не требует параметров.

## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/LogOutMethodExample.php

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

dump($manager->logOut());
```
