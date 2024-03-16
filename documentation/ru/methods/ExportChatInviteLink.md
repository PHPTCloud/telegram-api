# Метод exportChatInviteLink

## Общее

Ссылка: https://core.telegram.org/bots/api#exportchatinvitelink

Описание:
Используйте этот метод, чтобы создать новую основную ссылку для приглашения в чат; любая ранее созданная первичная ссылка отменяется. Для этого бот должен быть администратором в чате и иметь соответствующие права администратора. В случае успеха возвращает новую ссылку для приглашения в виде строки.

Примечание. Каждый администратор в чате генерирует собственные ссылки для приглашения. Боты не могут использовать ссылки-приглашения, созданные другими администраторами. Если вы хотите, чтобы ваш бот работал с пригласительными ссылками, ему необходимо будет сгенерировать собственную ссылку с помощью экспортаChatInviteLink или вызова метода getChat. Если вашему боту необходимо создать новую основную ссылку-приглашение взамен предыдущей, используйте команду ExportChatInviteLink еще раз.

| Параметр | Тип        | Обязательный | Описание                                                                                                  |
|----------|------------|--------------|-----------------------------------------------------------------------------------------------------------|
| chat_id  | int/string | да           | Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername). | 


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/ExportChatInviteLinkMethodExample.php

```php
<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Загружаем переменные из .env
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$token = $_ENV['TELEGRAM_BOT_TOKEN'];
$chatId = $_ENV['TELEGRAM_GROUP_CHAT_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

$link = $manager->exportChatInviteLink(
    new \PHPTCloud\TelegramApi\Argument\DataObject\ExportChatInviteLinkArgument($chatId),
);

dump($link);
dump($link->getScheme());
dump($link->getHost());
dump($link->getPath());

```
