<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatInviteLink;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInviteLinkInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatInviteLinkTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ChatInviteLinkTypeFactory implements ChatInviteLinkTypeFactoryInterface
{
    public function create(
        string $inviteLink,
        UserInterface $creator,
        bool $createsJoinRequest,
        bool $primary,
        bool $revoked,
        string $name = null,
        int $expireDate = null,
        int $memberLimit = null,
        int $pendingJoinRequestCount = null,
    ): ChatInviteLinkInterface {
        return new ChatInviteLink(
            $inviteLink,
            $creator,
            $createsJoinRequest,
            $primary,
            $revoked,
            $name,
            $expireDate,
            $memberLimit,
            $pendingJoinRequestCount,
        );
    }
}
