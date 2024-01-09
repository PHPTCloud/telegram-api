<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;
/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет изображения профиля пользователя.
 * @link    https://core.telegram.org/bots/api#userprofilephotos
 */
interface UserProfilePhotosInterface
{
    /**
     * Общее количество изображений профиля целевого пользователя.
     *
     * @return int
     */
    public function getTotalCount(): int;

    /**
     * Запрошенные изображения профиля (до 4 размеров каждое)
     *
     * @return PhotoSizeInterface[][]
     */
    public function getPhotos(): array;
}