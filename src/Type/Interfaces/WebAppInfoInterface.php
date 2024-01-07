<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Описывает веб-приложение.
 * @link    https://core.telegram.org/bots/webapps
 * @link    https://core.telegram.org/bots/api#webappinfo
 */
interface WebAppInfoInterface
{
    /**
     * URL-адрес HTTPS веб-приложения, который необходимо открыть с дополнительными данными, как указано в
     * разделе «Инициализация веб-приложений».
     *
     * @link    https://core.telegram.org/bots/webapps#initializing-mini-apps
     *
     * @return string
     */
    public function getUrl(): string;
}
