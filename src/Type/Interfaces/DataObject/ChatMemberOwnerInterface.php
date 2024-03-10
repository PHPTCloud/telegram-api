<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Представляет участника чата, который владеет чатом и имеет все права администратора.
 *
 * @see    https://core.telegram.org/bots/api#chatmemberowner
 */
interface ChatMemberOwnerInterface extends ChatMemberInterface
{
    /**
     * Правда, если присутствие пользователя в чате скрыто.
     */
    public function isAnonymous(): bool;

    /**
     * Необязательный. Пользовательский заголовок для этого пользователя.
     */
    public function getCustomTitle(): ?string;
}
