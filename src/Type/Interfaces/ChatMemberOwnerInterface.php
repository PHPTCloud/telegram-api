<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Представляет участника чата, который владеет чатом и имеет все права администратора.
 * @link    https://core.telegram.org/bots/api#chatmemberowner
 */
interface ChatMemberOwnerInterface extends ChatMemberInterface
{
    /**
     * Правда, если присутствие пользователя в чате скрыто.
     *
     * @return bool
     */
    public function isAnonymous(): bool;

    /**
     * Необязательный. Пользовательский заголовок для этого пользователя.
     *
     * @return string|null
     */
    public function getCustomTitle(): ?string;
}
