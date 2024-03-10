<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой видеосообщение (доступно в приложениях Telegram начиная с версии 4.0).
 *
 * @see    https://telegram.org/blog/video-messages-and-telescope
 * @see    https://core.telegram.org/bots/api#videonote
 */
interface VideoNoteInterface
{
    /**
     * Идентификатор этого файла, который можно использовать для загрузки или повторного использования файла.
     */
    public function getFileId(): string;

    /**
     * Уникальный идентификатор этого файла, который должен быть одинаковым во времени и для разных ботов.
     * Невозможно использовать для загрузки или повторного использования файла.
     */
    public function getFileUniqueId(): string;

    /**
     * Ширина и высота видео (диаметр видеосообщения), определяемые отправителем.
     */
    public function getLength(): int;

    /**
     * Продолжительность видео в секундах, указанная отправителем.
     */
    public function getDuration(): int;

    /**
     * Необязательный. Миниатюра видео.
     */
    public function getThumbnail(): ?PhotoSizeInterface;

    /**
     * Необязательный. Размер файла в байтах.
     */
    public function getFileSize(): ?int;
}
