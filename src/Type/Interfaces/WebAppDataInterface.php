<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Описывает данные, отправленные из веб-приложения боту.
 *
 * @link    https://core.telegram.org/bots/webapps
 * @link    https://core.telegram.org/bots/api#webappdata
 */
interface WebAppDataInterface
{
    /**
     * Данные. Имейте в виду, что плохой клиент может отправить в это поле произвольные данные.
     *
     * @return string
     */
    public function getData(): string;

    /**
     * Текст кнопки клавиатуры web_app, с помощью которой было открыто веб-приложение. Имейте в виду, что п
     * лохой клиент может отправить в это поле произвольные данные.
     *
     * @return string
     */
    public function getButtonText(): string;
}
