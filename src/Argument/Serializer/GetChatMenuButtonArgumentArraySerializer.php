<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMenuButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\GetChatMenuButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class GetChatMenuButtonArgumentArraySerializer implements GetChatMenuButtonArgumentArraySerializerInterface
{
    public function serialize(GetChatMenuButtonArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->getChatId()) {
            $data[TelegramApiFieldEnum::CHAT_ID->value] = $argument->getChatId();
        }

        return $data;
    }
}
