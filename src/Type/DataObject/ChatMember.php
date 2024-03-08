<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект содержит информацию об одном участнике чата. На данный момент поддерживаются следующие 6
 * типов участников чата:
 * - ChatMemberOwner (https://core.telegram.org/bots/api#chatmemberowner);
 * - ChatMemberAdministrator (https://core.telegram.org/bots/api#chatmemberadministrator);
 * - ChatMemberMember (https://core.telegram.org/bots/api#chatmembermember);
 * - ChatMemberRestricted (https://core.telegram.org/bots/api#chatmemberrestricted);
 * - ChatMemberLeft (https://core.telegram.org/bots/api#chatmemberleft);
 * - ChatMemberBanned (https://core.telegram.org/bots/api#chatmemberbanned);
 *
 * @see    https://core.telegram.org/bots/api#chatmember
 */
abstract class ChatMember implements ChatMemberInterface
{
    public function __construct(
        protected readonly string $status,
        protected readonly UserInterface $user,
    ) {
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getUser(): UserInterface
    {
        return $this->user;
    }
}
