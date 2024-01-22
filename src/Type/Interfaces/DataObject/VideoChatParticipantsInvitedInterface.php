<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой служебное сообщение о новых участниках, приглашенных в видеочат.
 * @link    https://core.telegram.org/bots/api#videochatparticipantsinvite
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
