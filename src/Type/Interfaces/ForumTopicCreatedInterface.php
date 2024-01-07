<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение о новой теме форума, созданной в чате.
 * @link    https://core.telegram.org/bots/api#forumtopiccreated
 */
interface ForumTopicCreatedInterface
{
    /**
     * Название топика.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Цвет иконки темы в формате RGB.
     *
     * @return int
     */
    public function getIconColor(): int;

    /**
     * Необязательный. Уникальный идентификатор пользовательского смайлика, отображаемого в виде значка
     * темы.
     *
     * @return string|null
     */
    public function getIconCustomEmojiId(): ?string;
}
