<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение об редактируемой теме форума.
 * @link    https://core.telegram.org/bots/api#forumtopicedited
 */
interface ForumTopicEditedInterface
{
    /**
     * Название топика.
     *
     * @return string
     */
    public function getName(): string;

    /**
     * Необязательный. Уникальный идентификатор пользовательского смайлика, отображаемого в виде значка
     * темы.
     *
     * @return string|null
     */
    public function getIconCustomEmojiId(): ?string;
}
