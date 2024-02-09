<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageIdInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\MessageIdDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\MessageIdTypeFactoryInterface;

class MessageIdDeserializer extends AbstractDeserializer implements MessageIdDeserializerInterface
{
    public function __construct(
        private readonly MessageIdTypeFactoryInterface $typeFactory,
    ) {
    }

    public function deserialize(array $data): MessageIdInterface
    {
        $messageId = $data[TelegramApiFieldEnum::MESSAGE_ID->value];

        $messageId = $this->filterNumeric($messageId);

        return $this->typeFactory->create($messageId);
    }
}
