<?php
declare(strict_types=1);

require(__DIR__ . '/../vendor/autoload.php');

// Загружаем переменные из .env
$dotenv = new Symfony\Component\Dotenv\Dotenv();
$dotenv->load(__DIR__ . '/.env');

$token = $_ENV['TELEGRAM_BOT_TOKEN'];
$chatId = $_ENV['TELEGRAM_CHAT_ID'];

$manager = \PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

dump($manager->logOut());
