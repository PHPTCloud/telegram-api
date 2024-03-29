<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой служебное сообщение о новых участниках, приглашенных в видеочат.
 *
 * @see    https://core.telegram.org/bots/api#videochatparticipantsinvite
 */
interface VideoChatParticipantsInvitedInterface
{
    /**
     * Новые участники, приглашенные в видеочат
     *
     * @return UserInterface[]
     */
    public function getUsers(): array;
}
