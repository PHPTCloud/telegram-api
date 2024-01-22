<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

use PHPTCloud\TelegramApi\Argument\Interfaces\MessageArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\MessageInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface TelegramApiManagerInterface
{
    public const TELEGRAM_API_HOST = 'https://api.telegram.org';

    public function getBot(): TelegramBotInterface;

    public function setTelegramApiHost(string $host): void;
}
