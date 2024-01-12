<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Factory\LocationTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\LocationInterface;

class LocationDeserializer extends AbstractDeserializer implements LocationDeserializerInterface
{
    public function __construct(
        private readonly LocationTypeFactoryInterface $locationTypeFactory,
    ) {}

    public function deserialize(array $data): LocationInterface
    {
        $longitude = $data[TelegramApiFieldEnum::LONGITUDE->value] ?? null;
        $latitude = $data[TelegramApiFieldEnum::LATITUDE->value] ?? null;
        $horizontalAccuracy = $data[TelegramApiFieldEnum::HORIZONTAL_ACCURACY->value] ?? null;
        $livePeriod = $data[TelegramApiFieldEnum::LIVE_PERIOD->value] ?? null;
        $heading = $data[TelegramApiFieldEnum::HEADING->value] ?? null;
        $proximityAlertRadius = $data[TelegramApiFieldEnum::PROXIMITY_ALERT_RADIUS->value] ?? null;

        $longitude = $this->filterNumeric($longitude);
        $latitude = $this->filterNumeric($latitude);
        $horizontalAccuracy = $this->filterNumeric($horizontalAccuracy);
        $livePeriod = $this->filterNumeric($livePeriod);
        $heading = $this->filterNumeric($heading);
        $proximityAlertRadius = $this->filterNumeric($proximityAlertRadius);

        return $this->locationTypeFactory->create(
            $longitude,
            $latitude,
            $horizontalAccuracy,
            $livePeriod,
            $heading,
            $proximityAlertRadius,
        );
    }
}
