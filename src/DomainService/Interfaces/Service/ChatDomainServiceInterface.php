<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ExportChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\RevokeChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SendChatActionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatAdministratorCustomTitleArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatDescriptionArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatPhotoArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SetChatTitleArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\UnbanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\DomainService\Interfaces\ValueObject\UrlValueObjectInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatInviteLinkInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ChatDomainServiceInterface
{
    /**
     * @param ChatIdArgumentInterface $argument
     *
     * Используйте этот метод, чтобы получать актуальную информацию о чате. Возвращает объект Chat в случае
     * успеха.
     *
     * @see https://core.telegram.org/bots/api#getchat
     * @see https://core.telegram.org/bots/api#chat
     */
    public function getChat(ChatIdArgumentInterface $argument): ChatInterface;

    /**
     * Используйте этот метод, когда вам нужно сообщить пользователю, что что-то происходит на стороне бота.
     * Статус устанавливается на 5 секунд или меньше (при поступлении сообщения от вашего бота клиенты Te
     * legram очищают его статус набора). Возвращает True в случае успеха.
     *
     * Пример: ImageBot требуется некоторое время для обработки запроса и загрузки изображения. Вместо отпр
     * авки текстового сообщения типа «Получение изображения, пожалуйста, подождите…» бот может использоват
     * ь sendChatAction с action = upload_photo. Пользователь увидит статус бота «отправка фото».
     *
     * @see  https://t.me/imagebot
     *
     * Мы рекомендуем использовать этот метод только в том случае, если получение ответа от бота займет зам
     * етное время.
     * @see  https://core.telegram.org/bots/api#sendchataction
     */
    public function sendChatAction(SendChatActionArgumentInterface $argument): bool;

    /**
     * Используйте этот метод, чтобы установить новую фотографию профиля для чата. Фотографии нельзя измени
     * ть в приватных чатах. Для этого бот должен быть администратором в чате и иметь соответствующие права
     * администратора. Возвращает True в случае успеха.
     *
     * @see https://core.telegram.org/bots/api#setchatphoto
     */
    public function setChatPhoto(SetChatPhotoArgumentInterface $argument): bool;

    /**
     * Используйте этот метод, чтобы удалить фотографию чата. Фотографии нельзя изменить в приватных чатах.
     * Для этого бот должен быть администратором в чате и иметь соответствующие права администратора. Возв
     * ращает True в случае успеха.
     *
     * @see https://core.telegram.org/bots/api#deletechatphoto
     */
    public function deleteChatPhoto(ChatIdArgumentInterface $argument): bool;

    /**
     * Используйте этот метод, чтобы ваш бот покинул группу, супергруппу или канал. Возвращает True в случа
     * е успеха.
     *
     * @see https://core.telegram.org/bots/api#leavechat
     */
    public function leaveChat(ChatIdArgumentInterface $argument): bool;

    /**
     * Использйте этот метод, чтобы изменить название чата. Название нельзя изменить в приватных чатах. Для
     * этого бот должен быть администратором в чате и иметь соответствующие права администратора. Возвраща
     * ет True в случае успеха.
     *
     * @see https://core.telegram.org/bots/api#setchattitle
     */
    public function setChatTitle(SetChatTitleArgumentInterface $argument): bool;

    /**
     * Используйте этот метод, чтобы изменить описание группы, супергруппы или канала. Для этого бот должен
     * быть администратором в чате и иметь соответствующие права администратора. Возвращает True в случае
     * успеха.
     *
     * @see https://core.telegram.org/bots/api#setchatdescription
     */
    public function setChatDescription(SetChatDescriptionArgumentInterface $argument): bool;

    /**
     * Используйте этот метод, чтобы получить количество участников в чате. Возвращает Int в случае успеха.
     *
     * @see https://core.telegram.org/bots/api#getchatmembercount
     */
    public function getChatMemberCount(ChatIdArgumentInterface $argument): int;

    /**
     * Используйте этот метод, чтобы забанить пользователя в группе, супергруппе или канале. В случае с суп
     * ергруппами и каналами пользователь не сможет самостоятельно вернуться в чат, используя ссылки на при
     * глашения и т. д., пока не будет разбанен. Для этого бот должен быть администратором чата и обладать
     * соответствующими правами администратора. Возвращает True в случае успеха.
     *
     * @see https://core.telegram.org/bots/api#banchatmember
     */
    public function banChatMember(BanChatMemberArgumentInterface $argument): bool;

    /**
     * Используйте этот метод, чтобы разбанить ранее заблокированного пользователя в супергруппе или канале
     * . Пользователь не вернется в группу или канал автоматически, но сможет присоединиться по ссылке и т.
     * д. Для этого бот должен быть администратором. По умолчанию этот метод гарантирует, что после звонка
     * пользователь не станет участником чата, но сможет к нему присоединиться. Поэтому, если пользователь
     * является участником чата, он также будет удален из чата. Если вы этого не хотите, используйте парам
     * етр only_if_banned. Возвращает True в случае успеха.
     *
     * @see https://core.telegram.org/bots/api#unbanchatmember
     */
    public function unbanChatMember(UnbanChatMemberArgumentInterface $argument): bool;

    /**
     * Используйте этот метод, чтобы установить собственный титул для администратора в супергруппе, продвиг
     * аемой ботом. Возвращает True в случае успеха.
     *
     * @see https://core.telegram.org/bots/api#setchatadministratorcustomtitle
     */
    public function setChatAdministratorCustomTitle(SetChatAdministratorCustomTitleArgumentInterface $argument): bool;

    /**
     * Используйте этот метод, чтобы создать новую основную ссылку для приглашения в чат; любая ранее созда
     * нная первичная ссылка отменяется. Для этого бот должен быть администратором в чате и иметь соответст
     * вующие права администратора. В случае успеха возвращает новую ссылку для приглашения в виде строки.
     *
     * @see https://core.telegram.org/bots/api#exportchatinvitelink
     */
    public function exportChatInviteLink(ExportChatInviteLinkArgumentInterface $argument): UrlValueObjectInterface;

    /**
     * Используйте этот метод, чтобы отозвать ссылку-приглашение, созданную ботом. Если основная ссылка ото
     * звана, новая ссылка создается автоматически. Для этого бот должен быть администратором в чате и имет
     * ь соответствующие права администратора. Возвращает отозванную ссылку приглашения как объект ChatInvi
     * teLink.
     *
     * @see https://core.telegram.org/bots/api#chatinvitelink
     * @see https://core.telegram.org/bots/api#revokechatinvitelink
     */
    public function revokeChatInviteLink(RevokeChatInviteLinkArgumentInterface $argument): ChatInviteLinkInterface;
}
