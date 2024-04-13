# Метод getMyCommands

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#getmycommands

Описание:

Используйте этот метод, чтобы получить текущий список команд бота для заданной области и языка пользователя. Возвращает массив объектов [BotCommand](https://core.telegram.org/bots/api#botcommand). Если команды не заданы, возвращается пустой список.

| Параметр      | Тип                                                                   | Обязательный | Описание                                                                                                       |
|---------------|-----------------------------------------------------------------------|--------------|----------------------------------------------------------------------------------------------------------------|
| scope         | [BotCommandScope](https://core.telegram.org/bots/api#botcommandscope) | нет          | Объект, сериализованный в формате JSON, описывающий круг пользователей. По умолчанию — BotCommandScopeDefault. |
| language_code | string                                                                | нет          | Двухбуквенный код языка ISO 639-1 или пустая строка.                                                           |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/GetMyCommandsMethodExample.php

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

$response = $manager->getMyCommands();
dump($response);

$response = $manager->getMyCommands(
    new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyCommandsArgument(
        new \PHPTCloud\TelegramApi\Argument\DataObject\BotCommandScopeChatArgument($chatId),
    ),
);
dump($response);
```
