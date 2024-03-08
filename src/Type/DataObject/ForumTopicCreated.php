<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ForumTopicCreatedInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет собой служебное сообщение о новой теме форума, созданной в чате.
 *
 * @see    https://core.telegram.org/bots/api#forumtopiccreated
 */
class ForumTopicCreated implements ForumTopicCreatedInterface
{
    public function __construct(
        private readonly string $name,
        private readonly int $iconColor,
        private readonly ?string $iconCustomEmojiId = null,
    ) {
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIconColor(): int
    {
        return $this->iconColor;
    }

    public function getIconCustomEmojiId(): ?string
    {
        return $this->iconCustomEmojiId;
    }
}
