# Метод revokeChatInviteLink

[<<< Назад](./../../)

## Общее

Ссылка: https://core.telegram.org/bots/api#revokechatinvitelink

Описание:
Используйте этот метод, чтобы отозвать ссылку-приглашение, созданную ботом. Если основная ссылка отозвана, новая ссылка создается автоматически. Для этого бот должен быть администратором в чате и иметь соответствующие права администратора. Возвращает отозванную ссылку приглашения как объект [ChatInviteLink](https://core.telegram.org/bots/api#chatinvitelink).

| Параметр    | Тип        | Обязательный | Описание                                                                                                  |
|-------------|------------|--------------|-----------------------------------------------------------------------------------------------------------|
| chat_id     | int/string | да           | Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername). |
| invite_link | string     | да           | Ссылка для приглашения, которую нужно отозвать.                                                           |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/RevokeChatInviteLinkMethodExample.php

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

dump('Получили ссылку.', $link);

$response = $manager->revokeChatInviteLink(
    new \PHPTCloud\TelegramApi\Argument\DataObject\RevokeChatInviteLinkArgument($chatId, $link),
);

dump($response);

```
