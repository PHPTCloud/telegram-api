<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface UnbanChatMemberArgumentInterface extends ArgumentInterface
{
    /**
     * Уникальный идентификатор целевой группы или имя пользователя целевой супергруппы или канала (в форма
     * те @channelusername).
     */
    public function getChatId(): int|float|string;

    /**
     * Уникальный идентификатор целевого пользователя.
     */
    public function getUserId(): int|float;

    /**
     * Ничего не делает, если пользователь не забанен.
     */
    public function isOnlyIfBanned(): ?bool;
}
