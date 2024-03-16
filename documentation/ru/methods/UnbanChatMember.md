# Метод unbanChatMember

[<<< Назад](./../../)

## Общее

Ссылка: https://core.telegram.org/bots/api#unbanchatmember

Описание:
Используйте этот метод, чтобы разбанить ранее заблокированного пользователя в супергруппе или канале. Пользователь не вернется в группу или канал автоматически, но сможет присоединиться по ссылке и т. д. Для этого бот должен быть администратором. По умолчанию этот метод гарантирует, что после звонка пользователь не станет участником чата, но сможет к нему присоединиться. Поэтому, если пользователь является участником чата, он также будет удален из чата. Если вы этого не хотите, используйте параметр only_if_banned. Возвращает True в случае успеха.

| Параметр       | Тип        | Обязательный | Описание                                                                                                                  |
|----------------|------------|--------------|---------------------------------------------------------------------------------------------------------------------------|
| chat_id        | int/string | да           | Уникальный идентификатор целевой группы или имя пользователя целевой супергруппы или канала (в формате @channelusername). |
| user_id        | int        | да           | Уникальный идентификатор целевого пользователя.                                                                           |
| only_if_banned | bool       | нет          | Ничего не делать, если пользователь не забанен.                                                                           |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/UnbanChatMemberMethodExample.php

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

$isOk = $manager->unbanChatMember(
    new \PHPTCloud\TelegramApi\Argument\DataObject\UnbanChatMemberArgument($chatId, $userId),
);

dump($isOk);
```
