<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface TelegramBotFactoryInterface
{
    public function create(
        string $token,
        string $username = null,
        string $name = null,
        string $description = null,
    ): TelegramBotInterface;
}
