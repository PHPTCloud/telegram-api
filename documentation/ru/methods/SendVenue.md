# Метод sendVenue

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#sendvenue

Описание:

Используйте этот метод для отправки информации о месте встречи. В случае успеха возвращается [Message](https://core.telegram.org/bots/api#message).

| Параметр               | Тип                                                                                                                                                                                                                                                                                                     | Обязательный | Описание                                                                                                                                                                                                                                                                                                                                                                                                              |
|------------------------|---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|--------------|-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| business_connection_id | string                                                                                                                                                                                                                                                                                                  | нет          | Уникальный идентификатор бизнес-соединения, от имени которого будет отправлено сообщение.                                                                                                                                                                                                                                                                                                                             |
| chat_id                | int/float/string                                                                                                                                                                                                                                                                                        | да           | Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername).                                                                                                                                                                                                                                                                                                             |
| message_thread_id      | int                                                                                                                                                                                                                                                                                                     | нет          | Уникальный идентификатор целевой ветки сообщений (темы) форума; только для супергрупп форума.                                                                                                                                                                                                                                                                                                                         |
| latitude               | float                                                                                                                                                                                                                                                                                                   | да           | Широта места проведения.                                                                                                                                                                                                                                                                                                                                                                                              |
| longitude              | float                                                                                                                                                                                                                                                                                                   | да           | Долгота места проведения.                                                                                                                                                                                                                                                                                                                                                                                             |
| title                  | string                                                                                                                                                                                                                                                                                                  | да           | Название места проведения.                                                                                                                                                                                                                                                                                                                                                                                            |
| address                | string                                                                                                                                                                                                                                                                                                  | да           | Адрес места проведения.                                                                                                                                                                                                                                                                                                                                                                                               |
| foursquare_id          | string                                                                                                                                                                                                                                                                                                  | нет          | Foursquare идентификатор места проведения.                                                                                                                                                                                                                                                                                                                                                                            |
| foursquare_type        | string                                                                                                                                                                                                                                                                                                  | нет          | Тип места проведения Foursquare, если известен. (Например, «arts_entertainment/default», «arts_entertainment/aquarium» или «food/мороженое».).                                                                                                                                                                                                                                                                        |
| google_place_id        | string                                                                                                                                                                                                                                                                                                  | нет          | Идентификатор места проведения в Google Places.                                                                                                                                                                                                                                                                                                                                                                       |
| google_place_type      | string                                                                                                                                                                                                                                                                                                  | нет          | Тип заведения в Google Адресах. (См. [поддерживаемые типы](https://developers.google.com/places/web-service/supported_types).).                                                                                                                                                                                                                                                                                       |
| disable_notification   | bool                                                                                                                                                                                                                                                                                                    | нет          | Отправляет сообщение [молча](https://telegram.org/blog/channels-2-0#silent-messages). Пользователи получат уведомление без звука.                                                                                                                                                                                                                                                                                     |
| protect_content        | bool                                                                                                                                                                                                                                                                                                    | нет          | Защищает содержимое отправленного сообщения от пересылки и сохранения.                                                                                                                                                                                                                                                                                                                                                |
| reply_parameters       | [ReplyParameters](https://core.telegram.org/bots/api#replyparameters)                                                                                                                                                                                                                                   | нет          | Описание сообщения, на которое нужно ответить.                                                                                                                                                                                                                                                                                                                                                                        |
| reply_markup           | [InlineKeyboardMarkup](https://core.telegram.org/bots/api#inlinekeyboardmarkup)/[ReplyKeyboardMarkup](https://core.telegram.org/bots/api#replykeyboardmarkup)/[ReplyKeyboardRemove](https://core.telegram.org/bots/api#replykeyboardremove)/[ForceReply](https://core.telegram.org/bots/api#forcereply) | нет          | Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для [встроенной клавиатуры](https://core.telegram.org/bots/features#inline-keyboards), [настраиваемой клавиатуры ответа](https://core.telegram.org/bots/features#keyboards), инструкций по удалению клавиатуры ответа или принудительному ответу пользователя. Не поддерживается для сообщений, отправленных от имени бизнес-аккаунта. |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/SendVenueMethodExample.php

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

$response = $manager->sendVenue(new \PHPTCloud\TelegramApi\Argument\DataObject\SendVenueArgument(
    chatId: $chatId,
    latitude: 55.7509635,
    longitude: 37.6162283,
    title: 'Кремль',
    address: 'QJ29+92 Tverskoy District, Moscow',
));
dump($response);

$response = $manager->sendVenue(new \PHPTCloud\TelegramApi\Argument\DataObject\SendVenueArgument(
    chatId: $chatId,
    latitude: 64.8833329,
    longitude: -164.6333332,
    title: 'Telegram Creek',
    address: 'Telegram Creek, Alaska 99762, USA',
    googlePlaceId: 'ChIJ8_BoxRp4MVcREJbm3mncaPw',
));
dump($response);
```
