<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * Используйте этот метод, чтобы установить новую фотографию профиля для чата. Фотографии нельзя измени
 * ть в приватных чатах. Для этого бот должен быть администратором в чате и иметь соответствующие права
 * администратора. Возвращает True в случае успеха.
 *
 * @see https://core.telegram.org/bots/api#setchatphoto
 */
interface SetChatPhotoArgumentInterface extends ArgumentInterface
{
    /**
     * Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusern
     * ame).
     */
    public function getChatId(): int|float|string;

    /**
     * Новая фотография чата, загруженная с использованием multipart/form-data.
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    public function getPhoto(): LocalFileArgumentInterface;
}
