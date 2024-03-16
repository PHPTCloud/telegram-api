# Метод setChatAdministratorCustomTitle

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#setchatadministratorcustomtitle

Описание:
Используйте этот метод, чтобы установить собственный титул для администратора в супергруппе, продвигаемой ботом. Возвращает True в случае успеха.

| Параметр     | Тип        | Обязательный | Описание                                                                                                         |
|--------------|------------|--------------|------------------------------------------------------------------------------------------------------------------|
| chat_id      | int/string | да           | Уникальный идентификатор целевого чата или имя пользователя целевой супергруппы (в формате @supergroupusername). |
| user_id      | int        | да           | Уникальный идентификатор целевого пользователя.                                                                  |
| custom_title | string     | да           | Новый пользовательский титул для администратора; Длина от 0 до 16 символов, смайлы не допускаются.               |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/SetChatAdministratorCustomTitleMethodExample.php

```php
<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Загружаем переменные из .env
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$token = $_ENV['TELEGRAM_BOT_TOKEN'];
$chatId = $_ENV['TELEGRAM_GROUP_CHAT_ID'];
$userId = (int) $_ENV['TELEGRAM_GROUP_MEMBER_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

// @TODO: Доработать пример, когда бот сможет назначать админов.

$isOk = $manager->setChatAdministratorCustomTitle(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SetChatAdministratorCustomTitleArgument(
        $chatId,
        $userId,
        'Редактор',
    ),
);

dump($isOk);
```
