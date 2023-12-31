<?php
declare(strict_types=1);

require(__DIR__ . '/../vendor/autoload.php');

$token = '6884547246:AAEWvuHzyxDMAtyulXYXCUR2ifcbV8jV2Fs';
$manager = \PHPTCloud\TelegramApi\TelegramApiManagerFactory::create($token);

var_dump($manager->close());
