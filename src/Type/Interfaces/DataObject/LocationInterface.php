<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой точку на карте.
 *
 * @see    https://core.telegram.org/bots/api#location
 */
interface LocationInterface
{
    /**
     * Долгота, определенная отправителем.
     */
    public function getLongitude(): float;

    /**
     * Широта, определенная отправителем.
     */
    public function getLatitude(): float;

    /**
     * Необязательный. Радиус неопределенности местоположения, измеряемый в метрах; 0-1500.
     */
    public function getHorizontalAccuracy(): ?float;

    /**
     * Необязательный. Время относительно даты отправки сообщения, в течение которого местоположение может
     * быть обновлено; в секундах. Только для активных живых локаций.
     */
    public function getLivePeriod(): ?int;

    /**
     * Необязательный. Направление движения пользователя в градусах; 1-360. Только для активных живых
     * локаций.
     */
    public function getHeading(): ?int;

    /**
     * Необязательный. Максимальное расстояние для оповещений о приближении к другому участнику чата в метр
     * ах. Только для отправленных живых локаций.
     */
    public function getProximityAlertRadius(): ?int;
}
