<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Factory\ChatLocationTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatLocationInterface;

class ChatLocationDeserializer extends AbstractDeserializer implements ChatLocationDeserializerInterface
{
    public function __construct(
        private readonly LocationDeserializerInterface $locationDeserializer,
        private readonly ChatLocationTypeFactoryInterface $chatLocationTypeFactory,
    ) {}

    public function deserialize(array $data): ChatLocationInterface
    {
        $location = $data[TelegramApiFieldEnum::LOCATION->value] ?? null;
        $address = $data[TelegramApiFieldEnum::ADDRESS->value] ?? null;

        $location = $this->filterArray($location);
        $address = $this->filterString($address);

        return $this->chatLocationTypeFactory->create(
            $this->locationDeserializer->deserialize($location),
            $address,
        );
    }
}
