<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberBannedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * Представляет участника чата, который был заблокирован в чате и не может вернуться в чат или просмотр
 * еть сообщения чата.
 *
 * @see    https://core.telegram.org/bots/api#chatmemberbanned
 */
class ChatMemberBanned extends ChatMember implements ChatMemberBannedInterface
{
    public function __construct(
        string $status,
        UserInterface $user,
        private readonly int $untilDate,
    ) {
        parent::__construct($status, $user);
    }

    public function getUntilDate(): int
    {
        return $this->untilDate;
    }
}
