<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberMemberInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Представляет участника чата, не имеющего дополнительных привилегий или ограничений.
 *
 * @see    https://core.telegram.org/bots/api#chatmembermember
 */
class ChatMemberMember extends ChatMember implements ChatMemberMemberInterface
{
}
