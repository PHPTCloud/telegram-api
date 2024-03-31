# Метод sendChatAction

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#sendchataction

Описание:

Используйте этот метод, когда вам нужно сообщить пользователю, что что-то происходит на стороне бота. Статус устанавливается на 5 секунд или меньше (при поступлении сообщения от вашего бота клиенты Telegram очищают его статус набора). Возвращает True в случае успеха.

Пример: [ImageBot](https://t.me/imagebot) требуется некоторое время для обработки запроса и загрузки изображения. Вместо отправки текстового сообщения типа «Получение изображения, пожалуйста, подождите…» бот может использовать [sendChatAction](https://core.telegram.org/bots/api#sendchataction) с action = upload_photo. Пользователь увидит статус бота «отправка фото».

Мы рекомендуем использовать этот метод только в том случае, если получение ответа от бота займет заметное время.

| Параметр               | Тип          | Обязательный | Описание                                                                                                                                                                                                                                                                            |
|------------------------|--------------|--------------|-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| business_connection_id | string       | нет          | Уникальный идентификатор бизнес-соединения, от имени которого будет отправлено действие.                                                                                                                                                                                            |
| chat_id                | string / int | да           | Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername).                                                                                                                                                                           |
| message_thread_id      | int          | нет          | Уникальный идентификатор целевого потока сообщений; только для супергрупп.                                                                                                                                                                                                          |
| action                 | string       | да           | Тип действия для трансляции. Выберите один из них, в зависимости от того, что пользователь собирается получить: typing, upload_photo, record_video, upload_video, record_voice, upload_voice, upload_document, choose_sticker, find_location, record_video_note, upload_video_note. |

## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/SendChatActionMethodExample.php

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

$actions = array_column(\PHPTCloud\TelegramApi\DomainService\Enums\ChatActionEnum::cases(), 'value');

// Отправляем все типы "действий" бота и удерживаем статус 3 секунды.
foreach ($actions as $action) {
    $manager->sendChatAction(new \PHPTCloud\TelegramApi\Argument\DataObject\SendChatActionArgument($chatId, $action));
    sleep(3);
}
```
