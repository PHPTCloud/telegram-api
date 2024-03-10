<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой служебное сообщение о новой теме форума, созданной в чате.
 *
 * @see    https://core.telegram.org/bots/api#forumtopiccreated
 */
interface ForumTopicCreatedInterface
{
    /**
     * Название топика.
     */
    public function getName(): string;

    /**
     * Цвет иконки темы в формате RGB.
     */
    public function getIconColor(): int;

    /**
     * Необязательный. Уникальный идентификатор пользовательского смайлика, отображаемого в виде значка
     * темы.
     */
    public function getIconCustomEmojiId(): ?string;
}
