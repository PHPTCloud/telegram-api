<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет изображения профиля пользователя.
 *
 * @see    https://core.telegram.org/bots/api#userprofilephotos
 */
interface UserProfilePhotosInterface
{
    /**
     * Общее количество изображений профиля целевого пользователя.
     */
    public function getTotalCount(): int;

    /**
     * Запрошенные изображения профиля (до 4 размеров каждое).
     *
     * @return PhotoSizeInterface[][]
     */
    public function getPhotos(): array;
}
