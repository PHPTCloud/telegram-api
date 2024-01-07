<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\LocationInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой точку на карте.
 * @link    https://core.telegram.org/bots/api#location
 */
class Location implements LocationInterface
{
    public function __construct(
        private readonly float $longitude,
        private readonly float $latitude,
        private readonly ?float $horizontalAccuracy = null,
        private readonly ?int $livePeriod = null,
        private readonly ?int $heading = null,
        private readonly ?int $proximityAlertRadius = null,
    ) {}

    public function getLongitude(): float
    {
        return $this->longitude;
    }

    public function getLatitude(): float
    {
        return $this->latitude;
    }

    public function getHorizontalAccuracy(): ?float
    {
        return $this->horizontalAccuracy;
    }

    public function getLivePeriod(): ?int
    {
        return $this->livePeriod;
    }

    public function getHeading(): ?int
    {
        return $this->heading;
    }

    public function getProximityAlertRadius(): ?int
    {
        return $this->proximityAlertRadius;
    }
}
