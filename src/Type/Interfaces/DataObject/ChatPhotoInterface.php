<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой фотографию чата.
 *
 * @see    https://core.telegram.org/bots/api#chatphoto
 */
interface ChatPhotoInterface
{
    /**
     * Идентификатор файла небольшой фотографии чата (160x160). Этот file_id можно использовать только для
     * загрузки фотографий и только до тех пор, пока фотография не будет изменена.
     */
    public function getSmallFileId(): string;

    /**
     * Уникальный идентификатор файла небольшой (160x160) фотографии чата, который должен быть одинаковым в
     * о времени и для разных ботов. Невозможно использовать для загрузки или повторного использования файла.
     */
    public function getSmallFileUniqueId(): string;

    /**
     * Идентификатор файла большой фотографии чата (640x640). Этот file_id можно использовать только для за
     * грузки фотографий и только до тех пор, пока фотография не будет изменена.
     */
    public function getBigFileId(): string;

    /**
     * Уникальный идентификатор файла большой (640x640) фотографии чата, который должен быть одинаковым во
     * времени и для разных ботов. Невозможно использовать для загрузки или повторного использования файла.
     */
    public function getBigFileUniqueId(): string;
}
