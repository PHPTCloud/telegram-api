<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @author  Илья Пешко peshkoi@mail.ru
 *
 * Представляет участника чата, который в данный момент не является участником чата, но может присоедин
 * иться к нему самостоятельно.
 *
 * @see    https://core.telegram.org/bots/api#chatmemberleft
 */
interface ChatMemberLeftInterface extends ChatMemberInterface
{
}
