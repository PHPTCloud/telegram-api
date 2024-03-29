<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет игру. Используйте BotFather для создания и редактирования игр, их короткие
 * имена будут выступать в качестве уникальных идентификаторов.
 *
 * @see    https://core.telegram.org/bots/api#game
 */
interface GameInterface
{
    /**
     * Название игры.
     */
    public function getTitle(): string;

    /**
     * Описание игры.
     */
    public function getDescription(): string;

    /**
     * Сообщение представляет собой фотографию, доступные размеры фотографии.
     *
     * @return PhotoSizeInterface[]
     */
    public function getPhoto(): array;

    /**
     * Необязательный. Краткое описание игры или рекорды, включенные в игровое сообщение. Может быть автома
     * тически отредактировано для включения текущих рекордов в игре, когда бот вызывает setGameScore, или
     * отредактировано вручную с помощью editMessageText. 0–4096 символов.
     */
    public function getText(): ?string;

    /**
     * Необязательный. Специальные объекты, которые появляются в тексте, например имена пользователей, URL-
     * адреса, команды бота и т.д.
     *
     * @return MessageEntityInterface[]|null
     */
    public function getTextEntities(): ?array;

    /**
     * Необязательный. Анимация, которая будет отображаться в игровом сообщении в чатах. Загрузить через
     * BotFather.
     */
    public function getAnimation(): ?AnimationInterface;
}
