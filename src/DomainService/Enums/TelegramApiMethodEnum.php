<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Enums;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Пешко Илья peshkoi@mail.ru
 *
 * API Changelog
 *
 * @see    https://core.telegram.org/bots/api-changelog#recent-changes
 */
enum TelegramApiMethodEnum: string
{
    /**
     * @see https://github.com/PHPTCloud/telegram-api/blob/master/documentation/ru/methods/GetMe.md
     */
    case GET_ME = 'getMe';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/blob/master/documentation/ru/methods/LogOut.md
     */
    case LOG_OUT = 'logOut';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/blob/master/documentation/ru/methods/Close.md
     */
    case CLOSE = 'close';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/blob/master/documentation/ru/methods/SendMessage.md
     */
    case SEND_MESSAGE = 'sendMessage';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/blob/master/documentation/ru/methods/GetChat.md
     */
    case GET_CHAT = 'getChat';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/blob/master/documentation/ru/methods/SendChatAction.md
     */
    case SEND_CHAT_ACTION = 'sendChatAction';

    /**
     * @see https://core.telegram.org/bots/api#setchatphoto
     *
     * Используйте этот метод, чтобы установить новую фотографию профиля для чата. Фотографии нельзя измени
     * ть в приватных чатах. Для этого бот должен быть администратором в чате и иметь соответствующие права
     * администратора. Возвращает True в случае успеха.
     */
    case SET_CHAT_PHOTO = 'setChatPhoto';

    /**
     * @see https://core.telegram.org/bots/api#deletechatphoto
     *
     * Используйте этот метод, чтобы удалить фотографию чата. Фотографии нельзя изменить в приватных чатах.
     * Для этого бот должен быть администратором в чате и иметь соответствующие права администратора. Возв
     * ращает True в случае успеха.
     */
    case DELETE_CHAT_PHOTO = 'deleteChatPhoto';

    /**
     * @see https://core.telegram.org/bots/api#forwardmessage
     *
     * Используйте этот метод для пересылки сообщений любого типа. Служебные сообщения и сообщения с защище
     * нным содержимым пересылаться не могут. В случае успеха отправленное сообщение возвращается.
     */
    case FORWARD_MESSAGE = 'forwardMessage';

    /**
     * @see https://core.telegram.org/bots/api#forwardmessages
     *
     * Используйте этот метод для пересылки нескольких сообщений любого типа. Если некоторые из указанных с
     * ообщений не удается найти или переслать, они пропускаются. Служебные сообщения и сообщения с защищен
     * ным содержимым пересылаться не могут. Группировка альбомов сохраняется для пересылаемых сообщений. В
     * случае успеха возвращается массив MessageId отправленных сообщений.
     */
    case FORWARD_MESSAGES = 'forwardMessages';

    /**
     * @see https://core.telegram.org/bots/api#copymessage
     *
     * Используйте этот метод для копирования сообщений любого типа. Служебные сообщения, сообщения о розыг
     * рышах, сообщения о победителях розыгрышей и сообщения о счетах не могут быть скопированы. Опрос викт
     * орины можно скопировать только в том случае, если боту известно значение поля correct_option_id. Мет
     * од аналогичен методу forwardMessage, но скопированное сообщение не имеет ссылки на исходное сообщени
     * е. Возвращает MessageId отправленного сообщения в случае успеха.
     */
    case COPY_MESSAGE = 'copyMessage';

    /**
     * @see https://core.telegram.org/bots/api#copymessages
     *
     * Используйте этот метод для копирования сообщений любого типа. Если некоторые из указанных сообщений
     * невозможно найти или скопировать, они пропускаются. Служебные сообщения, сообщения о розыгрышах, соо
     * бщения о победителях розыгрышей и сообщения о счетах не могут быть скопированы. Опрос викторины можн
     * о скопировать только в том случае, если значение поля correct_option_id известно боту. Метод аналоги
     * чен методу forwardMessages, но скопированные сообщения не имеют ссылки на исходное сообщение. Группи
     * ровка альбомов сохраняется для скопированных сообщений. В случае успеха возвращается массив MessageI
     * d отправленных сообщений.
     */
    case COPY_MESSAGES = 'copyMessages';

    /**
     * @see https://core.telegram.org/bots/api#sendphoto
     *
     * Используйте этот метод для отправки фотографий. В случае успеха отправленное сообщение возвращается.
     */
    case SEND_PHOTO = 'sendPhoto';

    /**
     * @see  https://core.telegram.org/bots/api#sendaudio
     *
     * Используйте этот метод для отправки аудиофайлов, если вы хотите, чтобы клиенты Telegram отображали и
     * х в музыкальном проигрывателе. Ваш звук должен быть в формате .MP3 или .M4A. В случае успеха отправл
     * енное сообщение возвращается. Боты в настоящее время могут отправлять аудиофайлы размером до 50 МБ,
     * в будущем этот лимит может быть изменен.
     *
     * Вместо этого для отправки голосовых сообщений используйте метод sendVoice.
     * @see  https://core.telegram.org/bots/api#sendvoice
     */
    case SEND_AUDIO = 'sendAudio';

    /**
     * @see https://core.telegram.org/bots/api#senddocument
     *
     * Используйте этот метод для отправки общих файлов. В случае успеха отправленное сообщение возвращаетс
     * я. Боты на данный момент могут отправлять файлы любого типа размером до 50 МБ, в будущем этот лимит
     * может быть изменен.
     */
    case SEND_DOCUMENT = 'sendDocument';

    /**
     * @see https://core.telegram.org/bots/api#sendvideo
     *
     * Используйте этот метод для отправки видео файлов. Клиенты Telegram поддерживают видео MPEG4 (другие ф
     * орматы могут быть отправлены как документ). В случае успеха отправленное сообщение возвращается. Бот
     * ы на данный момент могут отправлять видеофайлы размером до 50 МБ, в будущем этот лимит может быть из
     * менен.
     */
    case SEND_VIDEO = 'sendVideo';

    /**
     * @see https://core.telegram.org/bots/api#sendanimation
     *
     * Используйте этот метод для отправки файлов анимации (видео GIF или H.264/MPEG-4 AVC без звука). В сл
     * учае успеха отправленное сообщение возвращается. Боты в настоящее время могут отправлять файлы анима
     * ции размером до 50 МБ, в будущем этот предел может быть изменен.
     */
    case SEND_ANIMATION = 'sendAnimation';

    /**
     * @see https://core.telegram.org/bots/api#sendvoice
     *
     * Используйте этот метод для отправки аудиофайлов, если вы хотите, чтобы клиенты Telegram отображали ф
     * айл как воспроизводимое голосовое сообщение. Чтобы это работало, ваш звук должен быть в файле .OGG,
     * закодированном с помощью OPUS (другие форматы могут быть отправлены как аудио или документ). В случа
     * е успеха отправленное сообщение возвращается. Боты на данный момент могут отправлять голосовые сообщ
     * ения размером до 50 МБ, в будущем этот лимит может быть изменен.
     */
    case SEND_VOICE = 'sendVoice';

    /**
     * @see https://core.telegram.org/bots/api#sendvideonote
     *
     * Начиная с версии 4.0, клиенты Telegram поддерживают видео MPEG4 со скругленными квадратами продолжит
     * ельностью до 1 минуты. Используйте этот метод для отправки видеосообщений. В случае успеха отправлен
     * ное сообщение возвращается.
     */
    case SEND_VIDEO_NOTE = 'sendVideoNote';

    /**
     * @see https://core.telegram.org/bots/api#sendmediagroup
     *
     * Используйте этот метод, чтобы отправить группу фотографий, видео, документов или аудио в виде альбом
     * а. Документы и аудиофайлы можно группировать только в альбоме с однотипными сообщениями. В случае ус
     * пеха возвращается массив отправленных сообщений.
     */
    case SEND_MEDIA_GROUP = 'sendMediaGroup';

    /**
     * @see https://core.telegram.org/bots/api#leavechat
     *
     * Используйте этот метод, чтобы ваш бот покинул группу, супергруппу или канал. Возвращает True в случа
     * е успеха.
     */
    case LEAVE_CHAT = 'leaveChat';

    /**
     * @see https://core.telegram.org/bots/api#setchattitle
     *
     * Использйте этот метод, чтобы изменить название чата. Название нельзя изменить в приватных чатах. Для
     * этого бот должен быть администратором в чате и иметь соответствующие права администратора. Возвраща
     * ет True в случае успеха.
     */
    case SET_CHAT_TITLE = 'setChatTitle';

    /**
     * @see https://core.telegram.org/bots/api#setchatdescription
     *
     * Используйте этот метод, чтобы изменить описание группы, супергруппы или канала. Для этого бот должен
     * быть администратором в чате и иметь соответствующие права администратора. Возвращает True в случае
     * успеха.
     */
    case SET_CHAT_DESCRIPTION = 'setChatDescription';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetChatMemberCount.md
     */
    case GET_CHAT_MEMBER_COUNT = 'getChatMemberCount';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetChatMember.md
     */
    case GET_CHAT_MEMBER = 'getChatMember';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMessageReaction.md
     */
    case SET_MESSAGE_REACTION = 'setMessageReaction';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/BanChatMember.md
     */
    case BAN_CHAT_MEMBER = 'banChatMember';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/UnbanChaUMember.md
     */
    case UNBAN_CHAT_MEMBER = 'unbanChatMember';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetChatAdministratorCustomTitle.md
     */
    case SET_CHAT_ADMINISTRATOR_CUSTOM_TITLE = 'setChatAdministratorCustomTitle';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/ExportChatInviteLink.md
     */
    case EXPORT_CHAT_INVITE_LINK = 'exportChatInviteLink';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/RevokeChatInviteLink.md
     */
    case REVOKE_CHAT_INVITE_LINK = 'revokeChatInviteLink';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMessages.md
     */
    case DELETE_MESSAGES = 'deleteMessages';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMessage.md
     */
    case DELETE_MESSAGE = 'deleteMessage';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetFile.md
     */
    case GET_FILE = 'getFile';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/EditMessageText.md
     */
    case EDIT_MESSAGE_TEXT = 'editMessageText';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/EditMessageCaption.md
     */
    case EDIT_MESSAGE_CAPTION = 'editMessageCaption';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/EditMessageMedia.md
     */
    case EDIT_MESSAGE_MEDIA = 'editMessageMedia';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyDefaultAdministratorRights.md
     */
    case GET_MY_DEFAULT_ADMINISTRATOR_RIGHTS = 'getMyDefaultAdministratorRights';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMyDefaultAdministratorRights.md
     */
    case SET_MY_DEFAULT_ADMINISTRATOR_RIGHTS = 'setMyDefaultAdministratorRights';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetChatMenuButton.md
     */
    case GET_CHAT_MENU_BUTTON = 'getChatMenuButton';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetChatMenuButton.md
     */
    case SET_CHAT_MENU_BUTTON = 'setChatMenuButton';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyShortDescription.md
     */
    case GET_MY_SHORT_DESCRIPTION = 'getMyShortDescription';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMyShortDescription.md
     */
    case SET_MY_SHORT_DESCRIPTION = 'setMyShortDescription';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyDescription.md
     */
    case GET_MY_DESCRIPTION = 'getMyDescription';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMyDescription.md
     */
    case SET_MY_DESCRIPTION = 'setMyDescription';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyName.md
     */
    case GET_MY_NAME = 'getMyName';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMyName.md
     */
    case SET_MY_NAME = 'setMyName';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/GetMyCommands.md
     */
    case GET_MY_COMMANDS = 'getMyCommands';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMyCommands.md
     */
    case DELETE_MY_COMMANDS = 'deleteMyCommands';

    /**
     * @see https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetMyCommands.md
     */
    case SET_MY_COMMANDS = 'setMyCommands';
}
