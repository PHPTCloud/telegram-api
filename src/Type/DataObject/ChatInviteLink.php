<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInviteLinkInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Представляет ссылку для приглашения в чат.
 *
 * @see     https://core.telegram.org/bots/api#chatinvitelink
 */
class ChatInviteLink implements ChatInviteLinkInterface
{
    public function __construct(
        private readonly string $inviteLink,
        private readonly UserInterface $creator,
        private readonly bool $createsJoinRequest,
        private readonly bool $primary,
        private readonly bool $revoked,
        private readonly ?string $name = null,
        private readonly ?int $expireDate = null,
        private readonly ?int $memberLimit = null,
        private readonly ?int $pendingJoinRequestCount = null,
    ) {
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getCreator(): UserInterface
    {
        return $this->creator;
    }

    public function isCreatesJoinRequest(): bool
    {
        return $this->createsJoinRequest;
    }

    public function isPrimary(): bool
    {
        return $this->primary;
    }

    public function isRevoked(): bool
    {
        return $this->revoked;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function getExpireDate(): ?int
    {
        return $this->expireDate;
    }

    public function getMemberLimit(): ?int
    {
        return $this->memberLimit;
    }

    public function getPendingJoinRequestCount(): ?int
    {
        return $this->pendingJoinRequestCount;
    }
}
