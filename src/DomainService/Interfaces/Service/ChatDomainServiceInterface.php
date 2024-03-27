<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Interfaces\Service;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\BanChatMemberArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ChatIdArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMessageArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\DeleteMessagesArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ExportChatInviteLinkArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\GetChatMemberArgumentInterface;
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
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ChatMemberInterface;

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
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetChatMemberCount.md
     */
    public function getChatMemberCount(ChatIdArgumentInterface $argument): int;

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetChatMember.md
     */
    public function getChatMember(GetChatMemberArgumentInterface $argument): ChatMemberInterface;

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/BanChatMember.md
     */
    public function banChatMember(BanChatMemberArgumentInterface $argument): bool;

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/UnbanChaUMember.md
     */
    public function unbanChatMember(UnbanChatMemberArgumentInterface $argument): bool;

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetChatAdministratorCustomTitle.md
     */
    public function setChatAdministratorCustomTitle(SetChatAdministratorCustomTitleArgumentInterface $argument): bool;

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/ExportChatInviteLink.md
     */
    public function exportChatInviteLink(ExportChatInviteLinkArgumentInterface $argument): UrlValueObjectInterface;

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/RevokeChatInviteLink.md
     */
    public function revokeChatInviteLink(RevokeChatInviteLinkArgumentInterface $argument): ChatInviteLinkInterface;

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMessages.md
     */
    public function deleteMessages(DeleteMessagesArgumentInterface $argument): bool;

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMessage.md
     */
    public function deleteMessage(DeleteMessageArgumentInterface $argument): bool;
}
