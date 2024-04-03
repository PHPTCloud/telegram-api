# Метод editMessageCaption

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#editmessagecaption

Описание:

Используйте этот метод для редактирования подписей к сообщениям. В случае успеха, если редактируемое сообщение не является инлайн-сообщением, возвращается отредактированное сообщение, в противном случае возвращается True.

| Параметр          | Тип                                                                              | Обязательный | Описание                                                                                                                                               |
|-------------------|----------------------------------------------------------------------------------|--------------|--------------------------------------------------------------------------------------------------------------------------------------------------------|
| chat_id           | int/string                                                                       | нет          | Требуется, если не указан inline_message_id. Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername). |
| message_id        | int                                                                              | нет          | Требуется, если не указан inline_message_id. Идентификатор сообщения для редактирования.                                                               |
| inline_message_id | string                                                                           | нет          | Требуется, если не указаны chat_id и message_id. Идентификатор встроенного сообщения.                                                                  |
| caption           | string                                                                           | нет          | Новая надпись сообщения, 0-1024 символа после разбора сущностей.                                                                                       |
| parse_mode        | string                                                                           | нет          | Режим разбора сущностей в заголовке сообщения. Дополнительные сведения см. в разделе Параметры форматирования.                                         |
| caption_entities  | [MessageEntity[]](https://core.telegram.org/bots/api#messageentity)              | нет          | JSON-сериализованный список специальных сущностей, которые появляются в надписи, который может быть указан вместо parse_mode.                          |
| reply_markup      | 	[InlineKeyboardMarkup](https://core.telegram.org/bots/api#inlinekeyboardmarkup) | нет          | JSON-сериализованный объект для встроенной клавиатуры.                                                                                                 |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/EditMessageCaptionMethodExample.php

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
$messageBuilder = new PHPTCloud\TelegramApi\Argument\Builder\MessageArgumentBuilder();

$messageId = $manager->sendAnimation(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendAnimationArgument(
        chatId: $chatId,
        animation: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/video-min.mp4'),
        caption: 'Отправка анимации файла с клавиатурой.',
    ),
)->getMessageId();

usleep(350000);

$response = $manager->editMessageCaption(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageCaptionArgument(
        chatId: $chatId,
        messageId: $messageId,
        caption: 'Новый текст сообщения.',
    ),
);

dump($response);
```
