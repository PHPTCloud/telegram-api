<?php
declare(strict_types=1);

require(__DIR__ . '/../vendor/autoload.php');

// Инициализируем менеджер для интеграции с Telegram API
$token = '6884547246:AAEWvuHzyxDMAtyulXYXCUR2ifcbV8jV2Fs';
$manager = \PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

// Для создания простого текстового сообщения можно не использовать MessageArgumentBuilder. Однако, что
// бы соблюдать уровень сцепления модулей рекомендую не привязываться к конкретным реализациям и исполь
// зовать билдеры и фабрики.
$messageBuilder = new \PHPTCloud\TelegramApi\Argument\Builder\MessageArgumentBuilder();
$message = $messageBuilder->setChatId(869126733)
    ->setText('Простое текстовое сообщение.')
    ->build();

$result = $manager->sendMessage($message); // @return \PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface
dump($result);

// Также можно указать parse_mode параметр для использования форматирования текста.
$message = $messageBuilder->setChatId(869126733)
    ->setText('*Жирный текст*, _курсив_, [ссылка](http://www.example.com/) и прочее...')
    ->setParseMode(\PHPTCloud\TelegramApi\FormattingLanguagesEnum::MARKDOWN->value)
    // ->setNotificationDisabled(true)
    // ->setContentProtected(true)
    // ->setMessageThreadId(1)
    ->build();

// Пример отправки кода. В объекте Code автоматически происходит форматирование, но если вам не подходит этот
// метод, то можно отправить "сырой" отформатированный заранее контент в sendMessage.
//$message = $messageBuilder->setChatId(869126733)
//    ->setText((string)(new \PHPTCloud\TelegramApi\Type\Code('$foo = "Код на PHP";', 'php')))
//    ->setParseMode(\PHPTCloud\TelegramApi\FormattingLanguagesEnum::MARKDOWN->value)
//    ->build();

$result = $manager->sendMessage($message); // @return \PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface
dump($result);

// Пример использования MessageEntityArgument для форматирования текста.
// @link https://core.telegram.org/bots/api#messageentity
$message = $messageBuilder->setChatId(869126733)
    ->setText('Жирный текст, обычный текст.')
    ->addEntity(new \PHPTCloud\TelegramApi\Argument\DataObject\MessageEntityArgument(
        \PHPTCloud\TelegramApi\Type\Enums\MessageEntityTypeEnum::BOLD_TEXT->value,
        0,
        12,
    ))
    ->build();

$result = $manager->sendMessage($message); // @return \PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface
dump($result);

// Установка опция для пред показа ссылок
// @link https://core.telegram.org/bots/api#linkpreviewoptions
$message = $messageBuilder->setChatId(869126733)
    ->setText('LinkPreviewOptions - https://core.telegram.org/bots/api#linkpreviewoptions')
    ->setLinkPreviewOptions(
        new \PHPTCloud\TelegramApi\Argument\DataObject\LinkPreviewOptionsArgument(
            true, // убираем превью у ссылки.
        ),
    )
    ->build();

$result = $manager->sendMessage($message); // @return \PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface
dump($result);
