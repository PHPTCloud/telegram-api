# Метод getFile

[<<< Назад](./../)

## Общее

Ссылка: https://core.telegram.org/bots/api#getfile

Описание:
Используйте этот метод, чтобы получить основную информацию о файле и подготовить его к загрузке. На данный момент боты могут загружать файлы размером до 20 МБ. В случае успеха возвращается объект File. Затем файл можно будет скачать по ссылке https://api.telegram.org/file/bot<token>/<file_path>, где <file_path> берется из ответа. Гарантируется, что ссылка будет действительна не менее 1 часа. По истечении срока действия ссылки можно запросить новую, повторно вызвав getFile.

Примечание. Эта функция может не сохранить исходное имя файла и тип MIME. Вам следует сохранить MIME-тип и имя файла (если доступно) при получении объекта File.

| Параметр | Тип    | Обязательный | Описание                                                  |
|----------|--------|--------------|-----------------------------------------------------------|
| file_id  | strgin | да           | Идентификатор файла, о котором нужно получить информацию. | 


## Пример

Ссылка: https://github.com/PHPTCloud/telegram-api/blob/master/examples/GetFileMethodExample.php

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

$message = $manager->sendPhoto(
    new \PHPTCloud\TelegramApi\Argument\DataObject\SendPhotoArgument(
        chatId: $chatId,
        photo: new \PHPTCloud\TelegramApi\Argument\DataObject\LocalFileArgument(
            __DIR__ . '/assets/photo-min.png',
        ),
        caption: 'Локальный файл.',
        spoiler: true,
    ),
);

$response = $manager->getFile(new \PHPTCloud\TelegramApi\Argument\DataObject\GetFileArgument(
    $message->getPhoto()[0]->getFileId(),
));

dump($response);

```
