<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInviteLinkInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ChatInviteLinkTypeFactoryInterface extends TypeFactoryInterface
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
    ): ChatInviteLinkInterface;
}
