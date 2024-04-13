<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotNameInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\BotNameDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotNameTypeFactoryInterface;

class BotNameDeserializer extends AbstractDeserializer implements BotNameDeserializerInterface
{
    public function __construct(
        private readonly BotNameTypeFactoryInterface $typeFactory,
    ) {
    }

    public function deserialize(array $data): BotNameInterface
    {
        $name = $data[TelegramApiFieldEnum::NAME->value] ?? null;

        $name = $this->filterString($name);

        return $this->typeFactory->create($name);
    }
}
