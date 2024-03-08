<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberOwnerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Представляет участника чата, который владеет чатом и имеет все права администратора.
 *
 * @see    https://core.telegram.org/bots/api#chatmemberowner
 */
class ChatMemberOwner extends ChatMember implements ChatMemberOwnerInterface
{
    public function __construct(
        string $status,
        UserInterface $user,
        private readonly bool $anonymous,
        private readonly ?string $customTitle = null,
    ) {
        parent::__construct($status, $user);
    }

    public function isAnonymous(): bool
    {
        return $this->anonymous;
    }

    public function getCustomTitle(): ?string
    {
        return $this->customTitle;
    }
}
