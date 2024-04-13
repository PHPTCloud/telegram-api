# Метод deleteMyCommands

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#deletemycommands

Описание:

Используйте этот метод, чтобы удалить список команд бота для заданной области и языка пользователя. После удаления затронутым пользователям будут показаны [команды более высокого уровня](https://core.telegram.org/bots/api#determining-list-of-commands). Возвращает True в случае успеха.

| Параметр      | Тип                                                                   | Обязательный | Описание                                                                                                       |
|---------------|-----------------------------------------------------------------------|--------------|----------------------------------------------------------------------------------------------------------------|
| scope         | [BotCommandScope](https://core.telegram.org/bots/api#botcommandscope) | нет          | Объект, сериализованный в формате JSON, описывающий круг пользователей. По умолчанию — BotCommandScopeDefault. |
| language_code | string                                                                | нет          | Двухбуквенный код языка ISO 639-1 или пустая строка.                                                           |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/DeleteMyCommandsMethodExample.php

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

$response = $manager->deleteMyCommands();
dump($response);

$response = $manager->deleteMyCommands(
    new \PHPTCloud\TelegramApi\Argument\DataObject\DeleteMyCommandsArgument(
        new \PHPTCloud\TelegramApi\Argument\DataObject\BotCommandScopeChatArgument($chatId),
    ),
);
dump($response);
```
