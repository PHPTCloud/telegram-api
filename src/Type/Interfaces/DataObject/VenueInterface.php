<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой место проведения.
 *
 * @see    https://core.telegram.org/bots/api#venue
 */
interface VenueInterface
{
    /**
     * Долгота, определенная отправителем.
     */
    public function getLocation(): LocationInterface;

    /**
     * Название места проведения.
     */
    public function getTitle(): string;

    /**
     * Адрес места проведения.
     */
    public function getAddress(): string;

    /**
     * Необязательный. Четырехквадратный идентификатор места проведения.
     */
    public function getFoursquareId(): ?string;

    /**
     * Необязательный. Четырехугольный тип помещения. (Например, «arts_entertainment/default», «arts_entert
     * ainment/aquarium» или «food/мороженое».).
     */
    public function getFoursquareType(): ?string;

    /**
     * Необязательный. Идентификатор места проведения в Google Places.
     */
    public function getGooglePlaceId(): ?string;

    /**
     * Необязательный. Тип заведения в Google Адресах. (См. поддерживаемые типы.).
     *
     * @see    https://developers.google.com/maps/documentation/places/web-service/supported_types?hl=ru
     */
    public function getGooglePlaceType(): ?string;
}
