<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\Location;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\LocationTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class LocationTypeFactory implements LocationTypeFactoryInterface
{
    public function create(
        float $longitude,
        float $latitude,
        float $horizontalAccuracy = null,
        int $livePeriod = null,
        int $heading = null,
        int $proximityAlertRadius = null,
    ): LocationInterface {
        return new Location(
            $longitude,
            $latitude,
            $horizontalAccuracy,
            $livePeriod,
            $heading,
            $proximityAlertRadius,
        );
    }
}
