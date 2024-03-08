<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class TelegramBotFactory implements TelegramBotFactoryInterface
{
    public function create(
        string $token,
        string $username = null,
        string $name = null,
        string $description = null,
    ): TelegramBotInterface {
        return TelegramBot::NewBasic($token, $username, $name, $description);
    }
}
