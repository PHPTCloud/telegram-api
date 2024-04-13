# Метод setMyShortDescription

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#setmyshortdescription

Описание:

Используйте этот метод, чтобы изменить краткое описание бота, которое отображается на странице профиля бота и отправляется вместе со ссылкой, когда пользователи делятся ботом. Возвращает True в случае успеха.

| Параметр          | Тип    | Обязательный | Описание                                                                                                                                                       |
|-------------------|--------|--------------|----------------------------------------------------------------------------------------------------------------------------------------------------------------|
| short_description | string | нет          | Новое краткое описание бота; 0-120 символов. Передайте пустую строку, чтобы удалить специальное краткое описание для данного языка.                            |
| language_code     | string | нет          | Двухбуквенный код языка ISO 639-1. Если пусто, краткое описание будет применяться ко всем пользователям, для языка которых нет специального краткого описания. |


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/SetMyShortDescriptionMethodExample.php

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

$response = $manager->setMyShortDescription();
dump($response);

$response = $manager->setMyShortDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyShortDescriptionArgument(
    'Short description.',
    'en',
));
$enDescription = $manager->getMyShortDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyShortDescriptionArgument('en'));
dump($enDescription);

$response = $manager->setMyShortDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\SetMyShortDescriptionArgument(
    'Короткое описание.',
    'ru',
));
$ruDescription = $manager->getMyShortDescription(new \PHPTCloud\TelegramApi\Argument\DataObject\GetMyShortDescriptionArgument('ru'));
dump($ruDescription);
```
