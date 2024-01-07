<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\MessageEntityInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой особый объект в текстовом сообщении. Например, хэштеги, имена пользов
 * ателей, URL-адреса и т.д.
 * @link    https://core.telegram.org/bots/api#messageentity
 */
class MessageEntity implements MessageEntityInterface
{
    public function __construct(
        private readonly string         $type,
        private readonly int            $offset,
        private readonly int            $length,
        private readonly ?string        $url = null,
        private readonly ?UserInterface $user = null,
        private readonly ?string        $language = null,
        private readonly ?string        $customEmojiId = null,
    ) {}

    /**
     * @return string
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
