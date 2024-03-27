<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberMemberInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Илья Пешко tcloud.ax@gmail.com
 */
interface ChatMemberMemberTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        string $status,
        UserInterface $user,
    ): ChatMemberMemberInterface;
}
