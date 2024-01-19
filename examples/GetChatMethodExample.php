<?php
declare(strict_types=1);

use PHPTCloud\TelegramApi\Argument\DataObject\ChatIdArgument;
use PHPTCloud\TelegramApi\TelegramApiManagerFactory;

require(__DIR__ . '/../vendor/autoload.php');

// Инициализируем менеджер для интеграции с Telegram API
$token = '6884547246:AAEWvuHzyxDMAtyulXYXCUR2ifcbV8jV2Fs';
$manager = TelegramApiManagerFactory::create($token);

dd($manager->getChat(new ChatIdArgument(869126733)));
