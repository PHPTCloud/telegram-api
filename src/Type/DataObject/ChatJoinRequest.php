<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatInviteLinkInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ChatJoinRequestInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Представляет запрос на присоединение, отправленный в чат.
 * @link    https://core.telegram.org/bots/api#chatjoinrequest
 */
class ChatJoinRequest implements ChatJoinRequestInterface
{
    public function __construct(
        private readonly ChatInterface            $chat,
        private readonly UserInterface            $from,
        private readonly int|float                $userChatId,
        private readonly int                      $date,
        private readonly ?string                  $bio = null,
        private readonly ?ChatInviteLinkInterface $inviteLink = null,
    ) {}

    public function getChat(): ChatInterface
    {
        return $this->chat;
    }

    public function getFrom(): UserInterface
    {
        return $this->from;
    }

    public function getUserChatId(): float|int
    {
        return $this->userChatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getBio(): ?string
    {
        return $this->bio;
    }

    public function getInviteLink(): ?ChatInviteLinkInterface
    {
        return $this->inviteLink;
    }
}
