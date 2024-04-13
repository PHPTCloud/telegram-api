<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotDescriptionInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\BotDescriptionDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotDescriptionTypeFactoryInterface;

class BotDescriptionDeserializer extends AbstractDeserializer implements BotDescriptionDeserializerInterface
{
    public function __construct(
        private readonly BotDescriptionTypeFactoryInterface $typeFactory,
    ) {
    }

    public function deserialize(array $data): BotDescriptionInterface
    {
        $description = $data[TelegramApiFieldEnum::DESCRIPTION->value] ?? null;

        $description = $this->filterString($description);

        return $this->typeFactory->create($description);
    }
}
