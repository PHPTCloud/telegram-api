<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\LocationInterface;

interface LocationTypeFactoryInterface
{
    public function create(
        float $longitude,
        float $latitude,
        ?float $horizontalAccuracy = null,
        ?int $livePeriod = null,
        ?int $heading = null,
        ?int $proximityAlertRadius = null,
    ): LocationInterface;
}
