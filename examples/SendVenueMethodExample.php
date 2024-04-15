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

$response = $manager->sendVenue(new \PHPTCloud\TelegramApi\Argument\DataObject\SendVenueArgument(
    chatId: $chatId,
    latitude: 55.7509635,
    longitude: 37.6162283,
    title: 'Кремль',
    address: 'QJ29+92 Tverskoy District, Moscow',
));
dump($response);

$response = $manager->sendVenue(new \PHPTCloud\TelegramApi\Argument\DataObject\SendVenueArgument(
    chatId: $chatId,
    latitude: 64.8833329,
    longitude: -164.6333332,
    title: 'Telegram Creek',
    address: 'Telegram Creek, Alaska 99762, USA',
    googlePlaceId: 'ChIJ8_BoxRp4MVcREJbm3mncaPw',
));
dump($response);
