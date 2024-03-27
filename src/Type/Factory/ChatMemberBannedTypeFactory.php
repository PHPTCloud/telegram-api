<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatMemberBanned;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberBannedInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberBannedTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberBannedTypeFactory implements ChatMemberBannedTypeFactoryInterface
{
    public function create(
        string $status,
        UserInterface $user,
        int $untilDate,
    ): ChatMemberBannedInterface {
        return new ChatMemberBanned(
            $status,
            $user,
            $untilDate,
        );
    }
}
