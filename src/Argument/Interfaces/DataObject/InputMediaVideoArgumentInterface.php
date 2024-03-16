<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface InputMediaVideoArgumentInterface extends InputMediaArgumentInterface
{
    /**
     * Миниатюра отправленного файла; можно игнорировать, если создание миниатюр для файла поддерживается н
     * а стороне сервера. Миниатюра должна быть в формате JPEG и размером не более 200 КБ. Ширина и высота
     * миниатюры не должны превышать 320. Игнорируется, если файл не загружен с использованием multipart/fo
     * rm-data. Миниатюры нельзя использовать повторно, их можно загрузить только как новый файл, поэтому в
     * ы можете передать «attach://<file_attach_name>», если миниатюра была загружена с использованием mult
     * ipart/form-data в <file_attach_name>. Дополнительная информация об отправке файлов ».
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    public function getThumbnail(): LocalFileArgumentInterface|string|null;

    /**
     * Передайте True, если видео должно быть покрыто анимацией спойлера.
     */
    public function hasSpoiler(): ?bool;

    /**
     * Передайте значение True, если загруженное видео подходит для потоковой передачи.
     */
    public function isSupportsStreaming(): ?bool;

    /**
     * Длительность отправляемого видео в секундах.
     */
    public function getDuration(): ?int;

    /**
     * Ширина видео.
     */
    public function getWidth(): ?int;

    /**
     * Высота видео.
     */
    public function getHeight(): ?int;
}
