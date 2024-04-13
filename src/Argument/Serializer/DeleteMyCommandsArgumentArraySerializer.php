<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMyCommandsArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\BotCommandScopeArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\DeleteMyCommandsArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class DeleteMyCommandsArgumentArraySerializer implements DeleteMyCommandsArgumentArraySerializerInterface
{
    public function __construct(
        private readonly BotCommandScopeArraySerializerInterface $botCommandScopeArraySerializer,
    ) {
    }

    public function serialize(DeleteMyCommandsArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getScope()) {
            $data[TelegramApiFieldEnum::SCOPE->value] = $this->botCommandScopeArraySerializer->serialize($argument->getScope());
        }

        if ($argument->getLanguageCode()) {
            $data[TelegramApiFieldEnum::LANGUAGE_CODE->value] = $argument->getLanguageCode();
        }

        return $data;
    }
}
