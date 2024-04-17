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

$vcard = 'BEGIN:VCARD' . PHP_EOL;
$vcard .= 'VERSION:4.0' . PHP_EOL;
$vcard .= 'FN:Simon Perreault' . PHP_EOL;
$vcard .= 'N:Perreault;Simon;;;ing. jr,M.Sc.' . PHP_EOL;
$vcard .= 'BDAY:--0203' . PHP_EOL;
$vcard .= 'GENDER:M' . PHP_EOL;
$vcard .= 'EMAIL;TYPE=work:simon.perreault@viagenie.ca' . PHP_EOL;
$vcard .= 'END:VCARD';

$response = $manager->sendContact(new \PHPTCloud\TelegramApi\Argument\DataObject\SendContactArgument(
    chatId: $chatId,
    phoneNumber: '+7 999 999 99 99',
    firstName: 'Simon',
    lastName: 'Perreault',
    vcard: $vcard,
));
dump($response);
