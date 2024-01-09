<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;
/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой видеосообщение (доступно в приложениях Telegram начиная с версии 4.0).
 * @link    https://telegram.org/blog/video-messages-and-telescope
 * @link    https://core.telegram.org/bots/api#videonote
 */
interface VideoNoteInterface
{
    /**
     * Идентификатор этого файла, который можно использовать для загрузки или повторного использования файла.
     *
     * @return string
     */
    public function getFileId(): string;

    /**
     * Уникальный идентификатор этого файла, который должен быть одинаковым во времени и для разных ботов.
     * Невозможно использовать для загрузки или повторного использования файла.
     *
     * @return string
     */
    public function getFileUniqueId(): string;

    /**
     * Ширина и высота видео (диаметр видеосообщения), определяемые отправителем.
     *
     * @return int
     */
    public function getLength(): int;

    /**
     * Продолжительность видео в секундах, указанная отправителем.
     *
     * @return int
     */
    public function getDuration(): int;

    /**
     * Необязательный. Миниатюра видео
     *
     * @return PhotoSizeInterface|null
     */
    public function getThumbnail(): ?PhotoSizeInterface;

    /**
     * Необязательный. Размер файла в байтах
     *
     * @return int|null
     */
    public function getFileSize(): ?int;
}
