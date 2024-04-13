<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotShortDescriptionInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\BotShortDescriptionDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotShortDescriptionTypeFactoryInterface;

class BotShortDescriptionDeserializer extends AbstractDeserializer implements BotShortDescriptionDeserializerInterface
{
    public function __construct(
        private readonly BotShortDescriptionTypeFactoryInterface $typeFactory,
    ) {
    }

    public function deserialize(array $data): BotShortDescriptionInterface
    {
        $shortDescription = $data[TelegramApiFieldEnum::SHORT_DESCRIPTION->value] ?? null;

        $shortDescription = $this->filterString($shortDescription);

        return $this->typeFactory->create($shortDescription);
    }
}
