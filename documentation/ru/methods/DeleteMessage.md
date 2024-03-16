# Метод deleteMessage

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#deletemessage

Описание:
Используйте этот метод для удаления сообщения, включая служебные, со следующими ограничениями:

- Сообщение можно удалить только в том случае, если оно было отправлено менее 48 часов назад;
- Служебные сообщения о создании супергруппы, канала или темы форума удалить невозможно;
- Сообщение о кубике в приватном чате можно удалить только в том случае, если оно было отправлено более 24 часов назад;
- Боты могут удалять исходящие сообщения в приватных чатах, группах и супергруппах;
- Боты могут удалять входящие сообщения в приватных чатах;
- Боты, получившие разрешения can_post_messages, могут удалять исходящие сообщения в каналах;
- Если бот является администратором группы, он может удалить любое сообщение там;
- Если у бота есть разрешение can_delete_messages в супергруппе или канале, он может удалить там любое сообщение. 

Возвращает True в случае успеха.

| Параметр   | Тип        | Обязательный | Описание                                                                                                  |
|------------|------------|--------------|-----------------------------------------------------------------------------------------------------------|
| chat_id    | int/string | да           | Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername). |
| message_id | int        | да           | Идентификатор сообщения, которое необходимо удалить.                                                      |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/DeleteMessageMethodExample.php

```php
<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

// Загружаем переменные из .env
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$token = $_ENV['TELEGRAM_BOT_TOKEN'];
$chatId = $_ENV['TELEGRAM_CHAT_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);
$messageBuilder = new PHPTCloud\TelegramApi\Argument\Builder\MessageArgumentBuilder();

// Для создания простого текстового сообщения можно не использовать MessageArgumentBuilder. Однако, что
// бы соблюдать уровень сцепления модулей рекомендую не привязываться к конкретным реализациям и исполь
// зовать билдеры и фабрики.
$message = $messageBuilder->setChatId($chatId)
    ->setText('Простое текстовое сообщение.')
    ->build();
$message = $manager->sendMessage($message);

$response = $manager->deleteMessage(
    new \PHPTCloud\TelegramApi\Argument\DataObject\DeleteMessageArgument($chatId, $message->getMessageId()),
);

dump($response);
```
