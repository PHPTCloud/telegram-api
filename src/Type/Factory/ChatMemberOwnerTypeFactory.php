<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatMemberOwner;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberOwnerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberOwnerTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberOwnerTypeFactory implements ChatMemberOwnerTypeFactoryInterface
{
    public function create(
        string $status,
        UserInterface $user,
        bool $isAnonymous,
        ?string $customTitle,
    ): ChatMemberOwnerInterface {
        return new ChatMemberOwner(
            $status,
            $user,
            $isAnonymous,
            $customTitle,
        );
    }
}
