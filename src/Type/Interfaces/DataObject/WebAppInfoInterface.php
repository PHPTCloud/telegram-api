<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Описывает веб-приложение.
 *
 * @see    https://core.telegram.org/bots/webapps
 * @see    https://core.telegram.org/bots/api#webappinfo
 */
interface WebAppInfoInterface
{
    /**
     * URL-адрес HTTPS веб-приложения, который необходимо открыть с дополнительными данными, как указано в
     * разделе «Инициализация веб-приложений».
     *
     * @see    https://core.telegram.org/bots/webapps#initializing-mini-apps
     */
    public function getUrl(): string;
}
