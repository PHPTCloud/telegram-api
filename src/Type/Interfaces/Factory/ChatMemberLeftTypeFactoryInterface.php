<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberLeftInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Илья Пешко tcloud.ax@gmail.com
 */
interface ChatMemberLeftTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        string $status,
        UserInterface $user,
    ): ChatMemberLeftInterface;
}
