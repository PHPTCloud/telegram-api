<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageEntityInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой особый объект в текстовом сообщении. Например, хэштеги, имена пользов
 * ателей, URL-адреса и т.д.
 *
 * @see    https://core.telegram.org/bots/api#messageentity
 */
class MessageEntity implements MessageEntityInterface
{
    public function __construct(
        protected readonly string $type,
        protected readonly int $offset,
        protected readonly int $length,
        protected readonly ?string $url = null,
        protected readonly ?UserInterface $user = null,
        protected readonly ?string $language = null,
        protected readonly ?string $customEmojiId = null,
    ) {
    }

    /**
     * @see  \PHPTCloud\TelegramApi\Type\Enums\MessageEntityTypeEnum
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getUser(): ?UserInterface
    {
        return $this->user;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function getCustomEmojiId(): ?string
    {
        return $this->customEmojiId;
    }
}
