<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой параметр встроенной кнопки клавиатуры, используемой для автоматическо
 * й авторизации пользователя. Служит отличной заменой виджета входа в Telegram, когда пользователь зах
 * одит из Telegram. Все, что пользователю нужно сделать, это нажать кнопку и подтвердить, что он хочет
 * войти в систему.
 * Приложения Telegram поддерживают эти кнопки начиная с версии 5.7.
 *
 * @see     https://core.telegram.org/widgets/login
 * @see     https://core.telegram.org/bots/api#loginurl
 */
interface LoginUrlArgumentInterface
{
    /**
     * URL-адрес HTTPS, который будет открыт с данными авторизации пользователя, добавленными в строку запр
     * оса при нажатии кнопки. Если пользователь откажется предоставить авторизационные данные, будет откры
     * т исходный URL без информации о пользователе. Добавляемые данные аналогичны описанным в разделе «Пол
     * учение данных авторизации».
     * Примечание: Вы всегда должны проверять хеш полученных данных, чтобы убедиться в аутентификации и цел
     * остности данных, как описано в разделе «Проверка авторизации».
     *
     * @see https://core.telegram.org/widgets/login#receiving-authorization-data
     * @see https://core.telegram.org/widgets/login#checking-authorization
     */
    public function getUrl(): string;

    /**
     * Необязательный. Новый текст кнопки в пересылаемых сообщениях.
     */
    public function getForwardText(): ?string;

    /**
     * Необязательный. Имя пользователя бота, которое будет использоваться для авторизации пользователя. По
     * дробнее см. Настройка бота. Если не указано, будет использоваться имя пользователя текущего бота. До
     * мен URL-адреса должен совпадать с доменом, связанным с ботом. Дополнительную информацию см. в раздел
     * е «Привязка вашего домена к боту».
     *
     * @see https://core.telegram.org/widgets/login#setting-up-a-bot
     * @see https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot
     */
    public function getBotUsername(): ?string;

    /**
     * Необязательный. Передайте значение True, чтобы запросить у вашего бота разрешение отправлять сообщен
     * ия пользователю.
     *
     * @return true|null
     */
    public function wantRequestWriteAccess(): ?bool;
}
