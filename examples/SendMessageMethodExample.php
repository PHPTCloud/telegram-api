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
$messageArgument = $messageBuilder->setChatId(869126733)
    ->setText('Привет! Человечишка 😈')
    ->build();

$message = $manager->sendMessage($messageArgument);
dd($message);
