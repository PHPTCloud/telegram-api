# Метод editMessageText

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#editmessagetext

Описание:

Используйте этот метод для редактирования текстовых и [игровых сообщений](https://core.telegram.org/bots/api#games). В случае успеха, если отредактированное сообщение не является встроенным, возвращается отредактированное [сообщение](https://core.telegram.org/bots/api#message), в противном случае возвращается значение True.

| Параметр             | Тип                                                                             | Обязательный | Описание                                                                                                                                                               |
|----------------------|---------------------------------------------------------------------------------|--------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| chat_id              | int / string                                                                    | нет          | Требуется, если inline_message_id не указан. Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusername).                 |
| message_id           | int                                                                             | нет          | Требуется, если inline_message_id не указан. Идентификатор сообщения, которое нужно редактировать.                                                                     |
| inline_message_id    | string                                                                          | нет          | Требуется, если не указаныchat_id и message_id. Идентификатор встроенного сообщения.                                                                                   |
| text                 | string                                                                          | да           | Новый текст сообщения, 1-4096 символов после разбора сущностей.                                                                                                        |
| parse_mode           | string                                                                          | нет          | Режим разбора сущностей в тексте сообщения. Дополнительные сведения см. в разделе «[Параметры форматирования](https://core.telegram.org/bots/api#formatting-options)». |
| entities             | [MessageEntity[]](https://core.telegram.org/bots/api#messageentity)             | нет          | Сериализованный в формате JSON список специальных сущностей, которые появляются в тексте сообщения и которые можно указать вместо parse_mode.                          |
| link_preview_options | [LinkPreviewOptions](https://core.telegram.org/bots/api#linkpreviewoptions)     | нет          | Параметры создания предварительного просмотра ссылки для сообщения.                                                                                                    |
| reply_markup         | [InlineKeyboardMarkup](https://core.telegram.org/bots/api#inlinekeyboardmarkup) | нет          | Объект, сериализованный в формате JSON, для [встроенной клавиатуры](https://core.telegram.org/bots/features#inline-keyboards).                                         |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/EditMessageTextMethodExample.php

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

$messageId = $manager->sendMessage(
    $messageBuilder->setChatId($chatId)
        ->setText('Простое текстовое сообщение.')
        ->build()
)->getMessageId();

usleep(350000);

$response = $manager->editMessageText(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageTextArgument(
        $chatId,
        'Новый текст сообщения.',
        $messageId,
    ),
);

dump($response);

// Редактирование клавиатуры
$keyboardBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\InlineKeyboardMarkupArgumentBuilder();

$keyboard = $keyboardBuilder->addButton(
    new \PHPTCloud\TelegramApi\Argument\DataObject\InlineKeyboardButtonArgument('Кнопка 1', 'https://telegra.org'),
)->build();

$response = $manager->editMessageText(
    new \PHPTCloud\TelegramApi\Argument\DataObject\EditMessageTextArgument(
        chatId: $chatId,
        text: 'Новый текст сообщения.',
        messageId: $messageId,
        replyMarkup: $keyboard,
    ),
);

dump($response);
```
