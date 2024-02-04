<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WebAppInfoInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Описывает веб-приложение.
 *
 * @see     https://core.telegram.org/bots/webapps
 * @see     https://core.telegram.org/bots/api#webappinfo
 */
class WebAppInfo implements WebAppInfoInterface
{
    public function __construct(
        private readonly string $url,
    ) {
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
