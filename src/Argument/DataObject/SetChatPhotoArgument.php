<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LocalFileArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatPhotoArgumentInterface;

/**
 * Используйте этот метод, чтобы установить новую фотографию профиля для чата. Фотографии нельзя измени
 * ть в приватных чатах. Для этого бот должен быть администратором в чате и иметь соответствующие права
 * администратора. Возвращает True в случае успеха.
 *
 * @see https://core.telegram.org/bots/api#setchatphoto
 */
class SetChatPhotoArgument implements SetChatPhotoArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly LocalFileArgumentInterface $photo,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getPhoto(): LocalFileArgumentInterface
    {
        return $this->photo;
    }
}
