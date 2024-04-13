# Метод setChatMenuButton

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#setchatmenubutton

Описание:
...

| Параметр    | Тип                                                         | Обязательный | Описание                                                                                                                                          |
|-------------|-------------------------------------------------------------|--------------|---------------------------------------------------------------------------------------------------------------------------------------------------|
| chat_id     | int                                                         | нет          | Уникальный идентификатор целевого приватного чата. Если не указано, кнопка меню бота по умолчанию будет изменена.                                 |
| menu_button | [MenuButton](https://core.telegram.org/bots/api#menubutton) | нет          | Сериализованный объект JSON для новой кнопки меню бота. По умолчанию — [MenuButtonDefault](https://core.telegram.org/bots/api#menubuttondefault). |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/SetChatMenuButton.php

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

$response = $manager->setChatMenuButton(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SetChatMenuButtonArgument(
        $chatId,
        new \PHPTCloud\TelegramApi\Argument\DataObject\MenuButtonWebAppArgument(
            'Текст ссылки.',
            new \PHPTCloud\TelegramApi\Argument\DataObject\WebAppInfoArgument('https://telegram.org'),
        ),
    ),
);

dump($response);
```
