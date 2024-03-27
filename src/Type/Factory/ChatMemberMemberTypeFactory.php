<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatMemberMember;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberMemberInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberMemberTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberMemberTypeFactory implements ChatMemberMemberTypeFactoryInterface
{
    public function create(
        string $status,
        UserInterface $user,
    ): ChatMemberMemberInterface {
        return new ChatMemberMember(
            $status,
            $user,
        );
    }
}
