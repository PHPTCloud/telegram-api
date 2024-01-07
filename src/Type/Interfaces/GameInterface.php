<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет игру. Используйте BotFather для создания и редактирования игр, их короткие
 * имена будут выступать в качестве уникальных идентификаторов.
 * @link    https://core.telegram.org/bots/api#game
 */
interface GameInterface
{
    /**
     * Название игры.
     *
     * @return string
     */
    public function getTitle(): string;

    /**
     * Описание игры.
     *
     * @return string
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
     *
     * @return string|null
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
     *
     * @return AnimationInterface|null
     */
    public function getAnimation(): ?AnimationInterface;
}
