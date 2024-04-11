# Метод getChatMenuButton

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#getchatmenubutton

Описание:

Используйте этот метод, чтобы получить текущее значение кнопки меню бота в приватном чате или кнопки меню по умолчанию. Возвращает MenuButton в случае успеха.

| Параметр | Тип | Обязательный | Описание                                                                                                            |
|----------|-----|--------------|---------------------------------------------------------------------------------------------------------------------|
| chat_id  | int | да           | Уникальный идентификатор целевого приватного чата. Если не указано, будет возвращена кнопка меню бота по умолчанию. | 


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/GetChatMenuButtonMethodExample.php

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
$messageBuilder = new PHPTCloud\TelegramApi\Argument\Builder\MessageArgumentBuilder();

$response = $manager->getChatMenuButton(
    new \PHPTCloud\TelegramApi\Argument\DataObject\GetChatMenuButtonArgument($chatId),
);

dump($response);
```
