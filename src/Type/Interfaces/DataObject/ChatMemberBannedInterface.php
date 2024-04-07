<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * Представляет участника чата, который был заблокирован в чате и не может вернуться в чат или просмотр
 * еть сообщения чата.
 *
 * @see    https://core.telegram.org/bots/api#chatmemberbanned
 */
interface ChatMemberBannedInterface extends ChatMemberInterface
{
    /**
     * Дата, когда пользователь будет разбанен; время Unix. Если 0, тогда пользователь забанен навсегда.
     */
    public function getUntilDate(): int;
}
