# Метод setMyDescription

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#setmydescription

Описание:

Используйте этот метод для изменения описания бота, которое отображается в чате с ботом, если чат пуст. Возвращает True в случае успеха.

| Параметр      | Тип    | Обязательный | Описание                                                                                                                                    |
|---------------|--------|--------------|---------------------------------------------------------------------------------------------------------------------------------------------|
| description   | string | нет          | Новое описание бота; 0-512 символов. Передайте пустую строку, чтобы удалить специальное описание для данного языка.                         |
| language_code | string | нет          | Двухбуквенный код языка ISO 639-1. Если пусто, описание будет применено ко всем пользователям, для языка которых нет специального описания. |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/SetMyDescriptionMethodExample.php

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

$response = $manager->setMyDescription();
dump($response);

$response = $manager->setMyDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyDescriptionArgument(
    'Description.',
    'en',
));
$enDescription = $manager->getMyDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyDescriptionArgument('en'));
dump($enDescription);

$response = $manager->setMyDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyDescriptionArgument(
    'Короткое описание.',
    'ru',
));
$ruDescription = $manager->getMyDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyDescriptionArgument('ru'));
dump($ruDescription);
```
