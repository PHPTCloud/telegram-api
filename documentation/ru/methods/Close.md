# Метод close

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#close

Описание:

Используйте этот метод, чтобы закрыть экземпляр бота перед его перемещением с одного локального сервера на другой. Вам необходимо удалить веб-перехватчик перед вызовом этого метода, чтобы гарантировать, что бот не запустится снова после перезапуска сервера. Метод вернет ошибку 429 в первые 10 минут после запуска бота. Возвращает True в случае успеха. Не требует параметров.

## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/CloseMethodExample.php

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

dump($manager->close());
```
