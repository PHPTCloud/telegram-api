<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface UnbanChatMemberArgumentInterface extends ArgumentInterface
{
    public function getChatId(): int|float|string;

    public function getUserId(): int|float;

    public function isOnlyIfBanned(): ?bool;
}
