# Метод setMyDefaultAdministratorRights

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#setmydefaultadministratorrights

Описание:

Используйте этот метод, чтобы изменить права администратора по умолчанию, запрашиваемые ботом при добавлении его в качестве администратора в группы или каналы. Эти права будут предложены пользователям, но они могут изменить список перед добавлением бота. Возвращает True в случае успеха.

| Параметр     | Тип                                                                                   | Обязательный | Описание                                                                                                                                                                        |
|--------------|---------------------------------------------------------------------------------------|--------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| rights       | [ChatAdministratorRights](https://core.telegram.org/bots/api#chatadministratorrights) | нет          | JSON-сериализованный объект, описывающий новые права администратора по умолчанию. Если не указано, права администратора по умолчанию будут очищены.                             |
| for_channels | bool                                                                                  | нет          | Pass True to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed. |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/SetMyDefaultAdministratorRightsMethodExample.php

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

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

dump($manager->SetMyDefaultAdministratorRights(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyDefaultAdministratorRightsArgument(
        new \PHPTCloud\TelegramApi\Argument\DataObject\ChatAdministratorRightsArgument(
            false,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
            true,
        ),
        true,
    ),
));
```
