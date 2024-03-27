<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberOwnerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Илья Пешко tcloud.ax@gmail.com
 */
interface ChatMemberOwnerTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(
        string $status,
        UserInterface $user,
        bool $isAnonymous,
        ?string $customTitle,
    ): ChatMemberOwnerInterface;
}
