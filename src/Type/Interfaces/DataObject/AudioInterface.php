<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой аудиофайл, который клиенты Telegram будут рассматривать как музыку.
 *
 * @see    https://core.telegram.org/bots/api#audio
 */
interface AudioInterface
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
     * Продолжительность звука в секундах, определяемая отправителем.
     */
    public function getDuration(): int;

    /**
     * Необязательный. Исполнитель аудио, определенный отправителем или аудиотегами.
     */
    public function getPerformer(): ?string;

    /**
     * Необязательный. Название аудио, определенное отправителем или аудиотегами.
     */
    public function getTitle(): ?string;

    /**
     * Необязательный. Исходное имя файла, определенное отправителем.
     */
    public function getFileName(): ?string;

    /**
     * Необязательный. MIME-тип файла, определенный отправителем.
     */
    public function getMimeType(): ?string;

    /**
     * Уникальный идентификатор этого файла, который должен быть одинаковым во времени и для разных ботов.
     * Невозможно использовать для загрузки или повторного использования файла.Необязательный. Размер файла
     * в байтах. Он может быть больше 2^31, и в некоторых языках программирования могут возникать трудност
     * и/скрытые дефекты при его интерпретации. Но оно имеет не более 52 значащих битов, поэтому для хранен
     * ия этого значения безопасно использовать 64-битное целое число со знаком или тип с плавающей запятой
     * двойной точности.
     */
    public function getFileSize(): ?string;

    /**
     * Необязательный. Миниатюра обложки альбома, которому принадлежит музыкальный файл.
     */
    public function getThumbnail(): ?PhotoSizeInterface;
}
