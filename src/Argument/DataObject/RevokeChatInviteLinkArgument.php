<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\RevokeChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\ValueObject\UrlValueObjectInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class RevokeChatInviteLinkArgument implements RevokeChatInviteLinkArgumentInterface
{
    public function __construct(
        private readonly int|float|string $chatId,
        private readonly UrlValueObjectInterface|string $inviteLink,
    ) {
    }

    public function getChatId(): float|int|string
    {
        return $this->chatId;
    }

    public function getInviteLink(): string|UrlValueObjectInterface
    {
        return $this->inviteLink;
    }

    public function isUrlValueObject(): bool
    {
        return $this->getInviteLink() instanceof UrlValueObjectInterface;
    }
}
