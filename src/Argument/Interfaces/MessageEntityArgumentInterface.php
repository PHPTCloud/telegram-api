<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces;

use PHPTCloud\TelegramApi\Type\Interfaces\MessageEntityInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\UserInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 * @link    https://core.telegram.org/bots/api#messageentity
 */
interface MessageEntityArgumentInterface extends MessageEntityInterface
{
    public function getUser(): UserArgumentInterface|UserInterface|null;
}
