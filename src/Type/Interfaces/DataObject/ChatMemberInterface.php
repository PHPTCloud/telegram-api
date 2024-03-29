<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

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
interface ChatMemberInterface
{
    /**
     * Статус участника в чате.
     *
     * @see \PHPTCloud\TelegramApi\Type\Enums\ChatMemberEnum
     */
    public function getStatus(): string;

    /**
     * Информация о пользователе.
     */
    public function getUser(): UserInterface;
}
