<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\DataObject\ChatMemberLeft;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberLeftInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ChatMemberLeftTypeFactoryInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class ChatMemberLeftTypeFactory implements ChatMemberLeftTypeFactoryInterface
{
    public function create(
        string $status,
        UserInterface $user,
    ): ChatMemberLeftInterface {
        return new ChatMemberLeft(
            $status,
            $user,
        );
    }
}
