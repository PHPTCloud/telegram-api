<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UserArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class MessageEntityArgument implements MessageEntityArgumentInterface
{
    public function __construct(
        protected readonly string $type,
        protected readonly int $offset,
        protected readonly int $length,
        protected readonly ?string $url = null,
        protected readonly ?UserArgumentInterface $user = null,
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

    public function getUser(): ?UserArgumentInterface
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
