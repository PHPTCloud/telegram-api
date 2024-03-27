<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberLeftInterface;

/**
 * @author  Илья Пешко peshkoi@mail.ru
 *
 * Представляет участника чата, который в данный момент не является участником чата, но может присоедин
 * иться к нему самостоятельно.
 *
 * @see    https://core.telegram.org/bots/api#chatmemberleft
 */
class ChatMemberLeft extends ChatMember implements ChatMemberLeftInterface
{
}
