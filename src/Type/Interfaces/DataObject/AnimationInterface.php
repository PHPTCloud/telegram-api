<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой файл анимации (видео GIF или H.264/MPEG-4 AVC без звука).
 *
 * @see    https://core.telegram.org/bots/api#animation
 */
interface AnimationInterface
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
     * Ширина видео, определенная отправителем.
     */
    public function getWidth(): int;

    /**
     * Высота видео, определенная отправителем.
     */
    public function getHeight(): int;

    /**
     * Продолжительность видео в секундах, указанная отправителем.
     */
    public function getDuration(): int;

    /**
     * Необязательный. Миниатюра анимации, указанная отправителем.
     */
    public function getThumbnail(): ?PhotoSizeInterface;

    /**
     * Необязательный. Имя исходного файла анимации, определенное отправителем.
     */
    public function getFileName(): ?string;

    /**
     * Необязательный. MIME-тип файла, определенный отправителем.
     */
    public function getMimeType(): ?string;

    /**
     * Необязательный. Размер файла в байтах. Он может быть больше 2^31, и в некоторых языках программирова
     * ния  могут  возникать  трудности/скрытые  дефекты  при  его  интерпретации. Но оно имеет не более 52
     * значащих битов, поэтому для хранения этого значения безопасно  использовать 64-битное целое число со
     * знаком или тип с плавающей запятой двойной точности.
     */
    public function getFileSize(): null|int|float;
}
