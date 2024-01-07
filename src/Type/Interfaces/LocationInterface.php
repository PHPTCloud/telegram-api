<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой точку на карте.
 * @link    https://core.telegram.org/bots/api#location
 */
interface LocationInterface
{
    /**
     * Долгота, определенная отправителем.
     *
     * @return float
     */
    public function getLongitude(): float;

    /**
     * Широта, определенная отправителем.
     *
     * @return float
     */
    public function getLatitude(): float;

    /**
     * Необязательный. Радиус неопределенности местоположения, измеряемый в метрах; 0-1500.
     *
     * @return float|null
     */
    public function getHorizontalAccuracy(): ?float;

    /**
     * Необязательный. Время относительно даты отправки сообщения, в течение которого местоположение может
     * быть обновлено; в секундах. Только для активных живых локаций.
     *
     * @return int|null
     */
    public function getLivePeriod(): ?int;

    /**
     * Необязательный. Направление движения пользователя в градусах; 1-360. Только для активных живых
     * локаций.
     *
     * @return int|null
     */
    public function getHeading(): ?int;

    /**
     * Необязательный. Максимальное расстояние для оповещений о приближении к другому участнику чата в метр
     * ах. Только для отправленных живых локаций.
     *
     * @return int|null
     */
    public function getProximityAlertRadius(): ?int;
}
