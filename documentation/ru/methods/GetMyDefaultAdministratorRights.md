# Метод getMyDefaultAdministratorRights

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#getmydefaultadministratorrights

Описание:

Используйте этот метод, чтобы получить текущие права администратора бота по умолчанию. Возвращает [ChatAdministratorRights](https://core.telegram.org/bots/api#chatadministratorrights) в случае успеха.

| Параметр     | Тип  | Обязательный | Описание                                                                                                                                                                            |
|--------------|------|--------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| for_channels | bool | нет          | Передайте True, чтобы получить права администратора бота по умолчанию в каналах. В противном случае будут возвращены права администратора бота по умолчанию для групп и супергрупп. | 


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/GetMyDefaultAdministratorRightsMethodExample.php

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

dump($manager->getMyDefaultAdministratorRights(
    new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyDefaultAdministratorRightsArgument(),
));

```
