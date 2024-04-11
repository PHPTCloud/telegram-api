<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMenuButtonArgumentInterface;

class GetChatMenuButtonArgument implements GetChatMenuButtonArgumentInterface
{
    public function __construct(
        private readonly int|float|string|null $chatId,
    ) {
    }

    public function getChatId(): float|int|string|null
    {
        return $this->chatId;
    }
}
