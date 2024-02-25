<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface InputMediaAudioArgumentInterface extends InputMediaArgumentInterface
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
     * Продолжительность звука в секундах.
     */
    public function getDuration(): ?int;

    /**
     * Исполнитель.
     */
    public function getPerformer(): ?string;

    /**
     * Название трека.
     */
    public function getTitle(): ?string;
}
