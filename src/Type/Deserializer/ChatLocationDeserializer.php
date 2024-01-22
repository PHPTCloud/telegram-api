<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatLocationInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatLocationDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\LocationDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatLocationTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class ChatLocationDeserializer extends AbstractDeserializer implements ChatLocationDeserializerInterface
{
    public function __construct(
        private readonly ChatLocationTypeFactoryInterface $chatLocationTypeFactory,
        private readonly LocationDeserializerInterface $locationDeserializer,
    ) {
    }

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
