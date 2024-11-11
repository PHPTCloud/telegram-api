<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteChatStickerSetArgumentInterface;

class DeleteChatStickerSetArgument implements DeleteChatStickerSetArgumentInterface
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
