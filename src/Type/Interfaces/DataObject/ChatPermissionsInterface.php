<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Описывает действия, которые разрешено выполнять в чате пользователю, не являющемуся администратором.
 *
 * @see    https://core.telegram.org/bots/api#chatpermissions
 */
interface ChatPermissionsInterface
{
    /**
     * Необязательный. Верно, если пользователю разрешено отправлять текстовые сообщения, контакты, подарки,
     * победителей розыгрышей, счета, местоположения и места проведения.
     */
    public function canSendMessages(): ?bool;

    /**
     * Необязательный. Правда, если пользователю разрешено отправлять аудио.
     */
    public function canSendAudios(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено отправлять документы.
     */
    public function canSendDocuments(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено отправлять фотографии.
     */
    public function canSendPhotos(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено отправлять видео.
     */
    public function canSendVideos(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено отправлять видеозаметки.
     */
    public function canSendVideoNotes(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено отправлять голосовые заметки.
     */
    public function canSendVoiceNotes(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено отправлять опросы.
     */
    public function canSendPolls(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено отправлять анимации, игры, стикеры и использовать
     * встроенных ботов.
     */
    public function canSendOtherMessages(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено добавлять предварительный просмотр веб-страниц в
     * свои сообщения.
     */
    public function canAddWebPagePreviews(): ?bool;

    /**
     * Необязательный. Правда, если пользователю разрешено менять заголовок чата, фото и другие настройки.
     * Игнорируется в публичных супергруппах.
     */
    public function canChangeInfo(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено приглашать в чат новых пользователей.
     */
    public function canInviteUsers(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено закреплять сообщения. Игнорируется в публичных су
     * пергруппах.
     */
    public function canPinMessages(): ?bool;

    /**
     * Необязательный. Правда, если пользователю разрешено создавать темы на форуме. Если этот параметр опу
     * щен, по умолчанию используется значение can_pin_messages.
     */
    public function canManageTopics(): ?bool;
}
