<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
interface TelegramApiManagerFactoryInterface
{
    public static function create(
        string $token,
        string $host = TelegramApiManagerInterface::TELEGRAM_API_HOST,
        ?string $username = null,
        ?string $name = null,
        ?string $description = null
    ): TelegramApiManagerInterface;
}
