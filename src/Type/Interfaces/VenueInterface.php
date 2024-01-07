<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;
use PHPTCloud\TelegramApi\Type\DataObject\Location;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой место проведения.
 * @link    https://core.telegram.org/bots/api#venue
 */
interface VenueInterface
{
    /**
     * Долгота, определенная отправителем.
     *
     * @return LocationInterface
     */
    public function getLocation(): LocationInterface;

    /**
     * Название места проведения.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Адрес места проведения.
     *
     * @return string
     */
    public function getAddress(): string;

    /**
     * Необязательный. Четырехквадратный идентификатор места проведения
     *
     * @return string|null
     */
    public function getFoursquareId(): ?string;

    /**
     * Необязательный. Четырехугольный тип помещения. (Например, «arts_entertainment/default», «arts_entert
     * ainment/aquarium» или «food/мороженое».)
     *
     * @return string|null
     */
    public function getFoursquareType(): ?string;

    /**
     * Необязательный. Идентификатор места проведения в Google Places
     *
     * @return string|null
     */
    public function getGooglePlaceId(): ?string;

    /**
     * Необязательный. Тип заведения в Google Адресах. (См. поддерживаемые типы.)
     * @link    https://developers.google.com/maps/documentation/places/web-service/supported_types?hl=ru
     *
     * @return string|null
     */
    public function getGooglePlaceType(): ?string;
}
