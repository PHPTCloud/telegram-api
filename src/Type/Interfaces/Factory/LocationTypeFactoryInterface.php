<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LocationInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface LocationTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        float $longitude,
        float $latitude,
        float $horizontalAccuracy = null,
        int $livePeriod = null,
        int $heading = null,
        int $proximityAlertRadius = null,
    ): LocationInterface;
}
