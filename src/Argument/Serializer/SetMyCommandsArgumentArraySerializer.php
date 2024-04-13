<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BotCommandArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetMyCommandsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BotCommandArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BotCommandScopeArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SetMyCommandsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class SetMyCommandsArgumentArraySerializer implements SetMyCommandsArgumentArraySerializerInterface
{
    public function __construct(
        private readonly BotCommandArgumentArraySerializerInterface $botCommandArgumentArraySerializer,
        private readonly BotCommandScopeArraySerializerInterface $botCommandScopeArraySerializer,
    ) {
    }

    public function serialize(SetMyCommandsArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::COMMANDS->value] = array_map(function (BotCommandArgumentInterface $command) {
            return $this->botCommandArgumentArraySerializer->serialize($command);
        }, $argument->getCommands());

        if ($argument->getScope()) {
            $data[TelegramApiFieldEnum::SCOPE->value] = $this->botCommandScopeArraySerializer->serialize($argument->getScope());
        }

        if ($argument->getLanguageCode()) {
            $data[TelegramApiFieldEnum::LANGUAGE_CODE->value] = $argument->getLanguageCode();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
