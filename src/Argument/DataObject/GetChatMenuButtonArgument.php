<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMenuButtonArgumentInterface;

class GetChatMenuButtonArgument implements GetChatMenuButtonArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }
}
