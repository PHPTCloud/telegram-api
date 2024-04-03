# Метод editMessageMedia

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#editmessagemedia

Описание:

Используйте этот метод для редактирования анимационных, аудио-, документальных, фото- или видеосообщений. Если сообщение является частью альбома сообщений, то его можно редактировать только до аудио для аудиоальбомов, только до документа для альбомов документов и до фото или видео в противном случае. При редактировании встроенного сообщения новый файл загружать нельзя; используйте ранее загруженный файл по его file_id или укажите URL. В случае успеха, если редактируемое сообщение не является инлайн-сообщением, возвращается отредактированное сообщение, в противном случае возвращается True.

| Параметр          | Тип                                                                             | Обязательный | Описание                                                                                                                                               |
|-------------------|---------------------------------------------------------------------------------|--------------|--------------------------------------------------------------------------------------------------------------------------------------------------------|
| chat_id           | int/string                                                                      | нет          | Требуется, если не указан inline_message_id. Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername). |
| message_id        | int                                                                             | нет          | Требуется, если не указан inline_message_id. Идентификатор сообщения для редактирования.                                                               |
| inline_message_id | string                                                                          | нет          | Требуется, если не указаны chat_id и message_id. Идентификатор встроенного сообщения.                                                                  |
| media             | [InputMedia](https://core.telegram.org/bots/api#inputmedia)                     | да           | JSON-сериализованный объект для нового медиа-содержимого сообщения.                                                                                    |
| reply_markup      | [InlineKeyboardMarkup](https://core.telegram.org/bots/api#inlinekeyboardmarkup) | нет          | JSON-сериализованный объект для новой [встроенной клавиатуры](https://core.telegram.org/bots/features#inline-keyboards).                               |

## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/EditMessageMediaMethodExample.php

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

// Редактируем видео.
$messageId = $manager->sendVideo(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendVideoArgument(
        chatId: $chatId,
        video: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/video-min.mp4'),
        caption: 'Отправка видео #1.',
    ),
)->getMessageId();

usleep(350000);

$response = $manager->editMessageMedia(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageMediaArgument(
        media: new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaVideoArgument(
            media: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/video-min.mp4'),
            caption: 'Отправка видео #1.',
        ),
        chatId: $chatId,
        messageId: $messageId,
    ),
);

dump($response);

$messageId = $manager->sendPhoto(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendPhotoArgument(
        chatId: $chatId,
        photo: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/photo-min.png'),
        caption: 'Отправка фото №1.',
    ),
)->getMessageId();

usleep(350000);

$response = $manager->editMessageMedia(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageMediaArgument(
        media: new \PHPTCloud\TelegramApi\Argument\DataObject\InputMediaVideoArgument(
            media: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(__DIR__.'/assets/photo-min.png'),
            caption: 'Отправка фото №2.',
        ),
        chatId: $chatId,
        messageId: $messageId,
    ),
);

dump($response);
```
