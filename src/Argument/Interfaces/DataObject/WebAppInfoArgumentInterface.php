<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Описывает веб-приложение.
 *
 * @see     https://core.telegram.org/bots/webapps
 * @see     https://core.telegram.org/bots/api#webappinfo
 */
interface WebAppInfoArgumentInterface extends ArgumentInterface
{
    /**
     * URL-адрес HTTPS веб-приложения, который необходимо открыть с дополнительными данными, как указано в
     * разделе «Инициализация веб-приложений».
     *
     * @see    https://core.telegram.org/bots/webapps#initializing-mini-apps
     */
    public function getUrl(): string;
}
