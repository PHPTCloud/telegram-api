<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Описывает данные, отправленные из веб-приложения боту.
 *
 * @see    https://core.telegram.org/bots/webapps
 * @see    https://core.telegram.org/bots/api#webappdata
 */
interface WebAppDataInterface
{
    /**
     * Данные. Имейте в виду, что плохой клиент может отправить в это поле произвольные данные.
     */
    public function getData(): string;

    /**
     * Текст кнопки клавиатуры web_app, с помощью которой было открыто веб-приложение. Имейте в виду, что п
     * лохой клиент может отправить в это поле произвольные данные.
     */
    public function getButtonText(): string;
}
