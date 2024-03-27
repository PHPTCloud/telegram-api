<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * Представляет участника чата, на которого распространяются определенные ограничения в чате. Только су
 * пергруппы.
 *
 * @see    https://core.telegram.org/bots/api#chatmemberrestricted
 */
interface ChatMemberRestrictedInterface
{
    /**
     * Верно, если пользователь является участником чата на момент запроса.
     */
    public function isMember(): bool;

    /**
     * Верно, если пользователю разрешено отправлять текстовые сообщения, контакты, подарки,
     * победителей розыгрышей, счета, местоположения и места проведения.
     */
    public function canSendMessages(): bool;

    /**
     * Правда, если пользователю разрешено отправлять аудио.
     */
    public function canSendAudios(): bool;

    /**
     * Верно, если пользователю разрешено отправлять документы.
     */
    public function canSendDocuments(): bool;

    /**
     * Верно, если пользователю разрешено отправлять видео.
     */
    public function canSendPhotos(): bool;

    /**
     * Верно, если пользователю разрешено отправлять видео.
     */
    public function canSendVideos(): bool;

    /**
     * Верно, если пользователю разрешено отправлять видеозаметки.
     */
    public function canSendVideoNotes(): bool;

    /**
     * Верно, если пользователю разрешено отправлять голосовые заметки.
     */
    public function canSendVoiceNotes(): bool;

    /**
     * Верно, если пользователю разрешено отправлять опросы.
     */
    public function canSendPolls(): bool;

    /**
     * Верно, если пользователю разрешено отправлять анимации, игры, стикеры и использовать встроенных бото
     * в.
     */
    public function canSendOtherMessages(): bool;

    /**
     * Верно, если пользователю разрешено добавлять предварительный просмотр веб-страниц в
     * свои сообщения.
     */
    public function canAddWebPagePreviews(): bool;

    /**
     * Правда, если пользователю разрешено менять заголовок чата, фото и другие настройки.
     */
    public function canChangeInfo(): bool;

    /**
     * Верно, если пользователю разрешено приглашать в чат новых пользователей.
     */
    public function canInviteUsers(): bool;

    /**
     * Верно, если пользователю разрешено закреплять сообщения.
     */
    public function canPinMessages(): bool;

    /**
     * Правда, если пользователю разрешено создавать темы на форуме.
     */
    public function canManageTopics(): bool;

    /**
     * Дата, когда пользователь будет разбанен; время Unix. Если 0, тогда пользователь ограничен навсегда.
     */
    public function getUntilDate(): int;
}
