<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInviteLinkInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ChatInviteLinkDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\UserDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatInviteLinkTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ChatInviteLinkDeserializer extends AbstractDeserializer implements ChatInviteLinkDeserializerInterface
{
    public function __construct(
        private readonly ChatInviteLinkTypeFactoryInterface $typeFactory,
        private readonly UserDeserializerInterface $userDeserializer,
    ) {
    }

    public function deserialize(array $data): ChatInviteLinkInterface
    {
        $inviteLink = $data[TelegramApiFieldEnum::INVITE_LINK->value] ?? null;
        $creator = $data[TelegramApiFieldEnum::CREATOR->value] ?? null;
        $createsJoinRequest = $data[TelegramApiFieldEnum::CREATES_JOIN_REQUEST->value] ?? null;
        $primary = $data[TelegramApiFieldEnum::IS_PRIMARY->value] ?? null;
        $revoked = $data[TelegramApiFieldEnum::IS_REVOKED->value] ?? null;
        $name = $data[TelegramApiFieldEnum::NAME->value] ?? null;
        $expireDate = $data[TelegramApiFieldEnum::EXPIRE_DATE->value] ?? null;
        $memberLimit = $data[TelegramApiFieldEnum::MEMBER_LIMIT->value] ?? null;
        $pendingJoinRequestCount = $data[TelegramApiFieldEnum::PENDING_JOIN_REQUEST_COUNT->value] ?? null;

        $inviteLink = $this->filterString($inviteLink);
        $creator = $this->userDeserializer->deserialize($creator);
        $createsJoinRequest = $this->filterBoolean($createsJoinRequest);
        $primary = $this->filterBoolean($primary);
        $revoked = $this->filterBoolean($revoked);
        $name = $this->filterString($name);
        $expireDate = $this->filterNumeric($expireDate);
        $memberLimit = $this->filterNumeric($memberLimit);
        $pendingJoinRequestCount = $this->filterNumeric($pendingJoinRequestCount);

        return $this->typeFactory->create(
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
