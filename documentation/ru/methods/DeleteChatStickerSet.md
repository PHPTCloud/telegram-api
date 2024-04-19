# Метод deleteChatStickerSet

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#deletechatstickerset

Описание:
Используйте этот метод, чтобы удалить набор групповых стикеров из супергруппы. Для этого бот должен быть администратором в чате и иметь соответствующие права администратора. Используйте поле can_set_sticker_set, которое необязательно возвращается в запросах getChat, чтобы проверить, может ли бот использовать этот метод. Возвращает True в случае успеха.

| Параметр | Тип        | Обязательный | Описание                                                                                                                  |
|----------|------------|--------------|---------------------------------------------------------------------------------------------------------------------------|
| chat_id  | int/string | да           | Уникальный идентификатор целевой группы или имя пользователя целевой супергруппы или канала (в формате @channelusername). | 


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/DeleteChatStickerSetMethodExample.php

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
$chatId = $_ENV['TELEGRAM_GROUP_CHAT_ID'];

// Инициализируем менеджер для интеграции с Telegram API
$manager = PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

dump($manager->deleteChatStickerSet(new PHPTCloud\TelegramApi\Argument\DataObject\DeleteChatStickerSetArgument($chatId)));
```
