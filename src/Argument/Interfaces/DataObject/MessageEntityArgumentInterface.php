<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MessageEntityInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * @see    https://core.telegram.org/bots/api#messageentity
 */
interface MessageEntityArgumentInterface extends MessageEntityInterface
{
    public function getUser(): UserArgumentInterface|UserInterface|null;
}
