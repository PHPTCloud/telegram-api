# Метод sendContact

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#sendcontact

Описание:

Используйте этот метод для отправки телефонных контактов. В случае успеха отправленное сообщение возвращается.

| Параметр               | Тип                                                                                                                                                                                                                                                                                                     | Обязательный | Описание                                                                                                                                                                                                                                                                                                                                                                                                              |
|------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| business_connection_id | string                                                                                                                                                                                                                                                                                                  | нет          | Уникальный идентификатор бизнес-соединения, от имени которого будет отправлено сообщение.                                                                                                                                                                                                                                                                                                                             |
| chat_id                | int/float/string                                                                                                                                                                                                                                                                                        | да           | Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername).                                                                                                                                                                                                                                                                                                             |
| message_thread_id      | int                                                                                                                                                                                                                                                                                                     | нет          | Уникальный идентификатор целевой ветки сообщений (темы) форума; только для супергрупп форума.                                                                                                                                                                                                                                                                                                                         |
| phone_number           | string                                                                                                                                                                                                                                                                                                  | да           | Телефон контактного лица.                                                                                                                                                                                                                                                                                                                                                                                             |
| first_name             | string                                                                                                                                                                                                                                                                                                  | да           | Имя контакта.                                                                                                                                                                                                                                                                                                                                                                                                         |
| last_name              | string                                                                                                                                                                                                                                                                                                  | нет          | Фамилия контакта.                                                                                                                                                                                                                                                                                                                                                                                                     |
| vcard                  | string                                                                                                                                                                                                                                                                                                  | нет          | Дополнительные данные о контакте в виде [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 байт.                                                                                                                                                                                                                                                                                                                    |
| disable_notification   | bool                                                                                                                                                                                                                                                                                                    | нет          | Отправляет сообщение [молча](https://telegram.org/blog/channels-2-0#silent-messages). Пользователи получат уведомление без звука.                                                                                                                                                                                                                                                                                     |
| protect_content        | bool                                                                                                                                                                                                                                                                                                    | нет          | Защищает содержимое отправленного сообщения от пересылки и сохранения.                                                                                                                                                                                                                                                                                                                                                |
| reply_parameters       | [ReplyParameters](https://core.telegram.org/bots/api#replyparameters)                                                                                                                                                                                                                                   | нет          | Описание сообщения, на которое нужно ответить.                                                                                                                                                                                                                                                                                                                                                                        |
| reply_markup           | [InlineKeyboardMarkup](https://core.telegram.org/bots/api#inlinekeyboardmarkup)/[ReplyKeyboardMarkup](https://core.telegram.org/bots/api#replykeyboardmarkup)/[ReplyKeyboardRemove](https://core.telegram.org/bots/api#replykeyboardremove)/[ForceReply](https://core.telegram.org/bots/api#forcereply) | нет          | Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для [встроенной клавиатуры](https://core.telegram.org/bots/features#inline-keyboards), [настраиваемой клавиатуры ответа](https://core.telegram.org/bots/features#keyboards), инструкций по удалению клавиатуры ответа или принудительному ответу пользователя. Не поддерживается для сообщений, отправленных от имени бизнес-аккаунта. |



## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/SendContactMethodExample.php

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

$vcard = 'BEGIN:VCARD' . PHP_EOL;
$vcard .= 'VERSION:4.0' . PHP_EOL;
$vcard .= 'FN:Simon Perreault' . PHP_EOL;
$vcard .= 'N:Perreault;Simon;;;ing. jr,M.Sc.' . PHP_EOL;
$vcard .= 'BDAY:--0203' . PHP_EOL;
$vcard .= 'GENDER:M' . PHP_EOL;
$vcard .= 'EMAIL;TYPE=work:simon.perreault@viagenie.ca' . PHP_EOL;
$vcard .= 'END:VCARD';

$response = $manager->sendContact(new \PHPTCloud\TelegramApi\Argument\DataObject\SendContactArgument(
    chatId: $chatId,
    phoneNumber: '+7 999 999 99 99',
    firstName: 'Simon',
    lastName: 'Perreault',
    vcard: $vcard,
));
dump($response);
```
