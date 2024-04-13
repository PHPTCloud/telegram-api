<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\BotCommandInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\BotCommandDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\BotCommandTypeFactoryInterface;

class BotCommandDeserializer extends AbstractDeserializer implements BotCommandDeserializerInterface
{
    public function __construct(
        private readonly BotCommandTypeFactoryInterface $typeFactory,
    ) {
    }

    public function deserialize(array $data): BotCommandInterface
    {
        $command = $data[TelegramApiFieldEnum::COMMAND->value] ?? null;
        $description = $data[TelegramApiFieldEnum::DESCRIPTION->value] ?? null;

        $command = $this->filterString($command);
        $description = $this->filterString($description);

        return $this->typeFactory->create($command, $description);
    }
}
