<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForumTopicEditedInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет собой служебное сообщение об редактируемой теме форума.
 *
 * @see    https://core.telegram.org/bots/api#forumtopicedited
 */
class ForumTopicEdited implements ForumTopicEditedInterface
{
    public function __construct(
        private readonly string $name,
        private readonly ?string $iconCustomEmojiId = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIconCustomEmojiId(): ?string
    {
        return $this->iconCustomEmojiId;
    }
}
