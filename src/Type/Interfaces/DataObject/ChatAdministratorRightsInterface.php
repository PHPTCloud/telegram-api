<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Представляет права администратора в чате.
 *
 * @link    https://core.telegram.org/bots/api#chatadministratorrights
 */
interface ChatAdministratorRightsInterface
{
    /**
     * Правда, если присутствие пользователя в чате скрыто.
     *
     * @return bool|null
     */
    public function isAnonymous(): ?bool;

    /**
     * Верно, если администратор может получить доступ к журналу событий чата, расширенному списку каналов,
     * видеть участников канала, сообщать о спам-сообщениях, видеть анонимных администраторов в супергрупп
     * ах и игнорировать медленный режим. Подразумевается любой другой привилегией администратора.
     *
     * @return bool|null
     */
    public function canManageChat(): ?bool;

    /**
     * Правда, если администратор может удалять сообщения других пользователей.
     *
     * @return bool|null
     */
    public function canDeleteMessages(): ?bool;

    /**
     * Правда, если администратор может управлять видеочатами.
     *
     * @return bool|null
     */
    public function canManageVideoChats(): ?bool;

    /**
     * Правда, если администратор может ограничивать, блокировать или разблокировать участников чата или по
     * лучать доступ к статистике супергруппы.
     *
     * @return bool|null
     */
    public function canRestrictMembers(): ?bool;

    /**
     * Верно, если администратор может добавлять новых администраторов с подмножеством своих собственных пр
     * ивилегий или понижать в должности администраторов, которых они повысили, прямо или косвенно (повысил
     * и администраторами, назначенными пользователем).
     *
     * @return bool|null
     */
    public function canPromoteMembers(): ?bool;

    /**
     * Правда, если пользователю разрешено менять заголовок чата, фото и другие настройки.
     *
     * @return bool|null
     */
    public function canChangeInfo(): ?bool;

    /**
     * Правда, если пользователю разрешено приглашать в чат новых пользователей.
     *
     * @return bool|null
     */
    public function canInviteUsers(): ?bool;

    /**
     * Необязательный. Правда, если администратор может публиковать сообщения в канале или получать доступ
     * к статистике канала; только каналы.
     *
     * @return bool|null
     */
    public function canPostMessages(): ?bool;

    /**
     * Необязательный. Правда, если администратор может редактировать сообщения других пользователей и може
     * т закреплять сообщения; только каналы.
     *
     * @return bool|null
     */
    public function canEditMessages(): ?bool;

    /**
     * Необязательный. Истинно, если пользователю разрешено закреплять сообщения; только группы и супергруп
     * пы.
     *
     * @return bool|null
     */
    public function canPinMessages(): ?bool;

    /**
     * Необязательный. Правда, если администратор может публиковать истории в канале; только каналы.
     *
     * @return bool|null
     */
    public function canPostStories(): ?bool;

    /**
     * Необязательный. Правда, если администратор может редактировать истории, опубликованные другими польз
     * ователями; только каналы.
     *
     * @return bool|null
     */
    public function canEditStories(): ?bool;

    /**
     * Необязательный. Правда, если администратор может удалять истории, опубликованные другими пользовател
     * ями; только каналы.
     *
     * @return bool|null
     */
    public function canDeleteStories(): ?bool;

    /**
     * Необязательный. Верно, если пользователю разрешено создавать, переименовывать, закрывать и повторно
     * открывать темы форума; только супергруппы.
     *
     * @return bool|null
     */
    public function canManageTopics(): ?bool;
}
