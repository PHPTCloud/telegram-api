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
     * @see https://core.telegram.org/bots/api#getme
     *
     * Простой метод проверки токена аутентификации вашего бота. Не требует параметров. Возвращает основную
     * информацию о боте в виде объекта User (https://core.telegram.org/bots/api#user).
     */
    case GET_ME = 'getMe';

    /**
     * @see https://core.telegram.org/bots/api#logout
     *
     * Используйте этот метод для выхода из облачного сервера API бота перед локальным запуском бота. Вы до
     * лжны выйти из системы бота перед его локальным запуском, иначе нет никакой гарантии, что бот будет п
     * олучать обновления. После успешного звонка вы сразу сможете авторизоваться на локальном сервере, но
     * не сможете зайти обратно на сервер Cloud Bot API в течение 10 минут. Возвращает True в случае успеха
     * . Не требует параметров. Примечание: метод может понадобиться если вы используете локаьлный Telegram
     * API (https://github.com/tdlib/telegram-bot-api).
     */
    case LOG_OUT = 'logOut';

    /**
     * @see https://core.telegram.org/bots/api#close
     *
     * Используйте этот метод, чтобы закрыть экземпляр бота перед его перемещением с одного локального серв
     * ера на другой. Вам необходимо удалить веб-перехватчик перед вызовом этого метода, чтобы гарантироват
     * ь, что бот не запустится снова после перезапуска сервера. Метод вернет ошибку 429 в первые 10 минут
     * после запуска бота. Возвращает True в случае успеха. Не требует параметров.
     */
    case CLOSE = 'close';

    /**
     * @see https://core.telegram.org/bots/api#sendmessage
     *
     * Используйте этот метод для отправки текстовых сообщений. В случае успеха отправленное сообщение возв
     * ращается с типом Message (https://core.telegram.org/bots/api#message).
     */
    case SEND_MESSAGE = 'sendMessage';

    /**
     * @see https://core.telegram.org/bots/api#getchat
     *
     * Используйте этот метод, чтобы получить актуальную информацию о чате. В случае успеха возвращает объе
     * кт с типом Chat (https://core.telegram.org/bots/api#chat).
     */
    case GET_CHAT = 'getChat';

    /**
     * @see  https://core.telegram.org/bots/api#sendchataction
     *
     * Используйте этот метод, когда вам нужно сообщить пользователю, что что-то происходит на стороне бота.
     * Статус устанавливается на 5 секунд или меньше (при поступлении сообщения от вашего бота клиенты Te
     * legram очищают его статус набора). Возвращает True в случае успеха.
     *
     * Пример: ImageBot требуется некоторое время для обработки запроса и загрузки изображения. Вместо отпр
     * авки текстового сообщения типа «Получение изображения, пожалуйста, подождите…» бот может использоват
     * ь sendChatAction с action = upload_photo. Пользователь увидит статус бота «отправка фото».
     * @see  https://t.me/imagebot
     *
     * Мы рекомендуем использовать этот метод только в том случае, если получение ответа от бота займет зам
     * етное время.
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
     * @see https://core.telegram.org/bots/api#getchatmembercount
     *
     * Используйте этот метод, чтобы получить количество участников в чате. Возвращает Int в случае успеха.
     */
    case GET_CHAT_MEMBER_COUNT = 'getChatMemberCount';

    /**
     * @see https://core.telegram.org/bots/api#setmessagereaction
     *
     * Используйте этот метод, чтобы изменить выбранные реакции на сообщение. На служебные сообщения нельзя
     * реагировать. Автоматически пересылаемые сообщения из канала в его дискуссионную группу имеют те же
     * доступные реакции, что и сообщения в канале. Возвращает True при успехе.
     */
    case SET_MESSAGE_REACTION = 'setMessageReaction';

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/BanChatMember.md
     */
    case BAN_CHAT_MEMBER = 'banChatMember';

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/UnbanChaUMember.md
     */
    case UNBAN_CHAT_MEMBER = 'unbanChatMember';

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/SetChatAdministratorCustomTitle.md
     */
    case SET_CHAT_ADMINISTRATOR_CUSTOM_TITLE = 'setChatAdministratorCustomTitle';

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/ExportChatInviteLink.md
     */
    case EXPORT_CHAT_INVITE_LINK = 'exportChatInviteLink';

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/RevokeChatInviteLink.md
     */
    case REVOKE_CHAT_INVITE_LINK = 'revokeChatInviteLink';

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMessages.md
     */
    case DELETE_MESSAGES = 'deleteMessages';

    /**
     * @link https://github.com/PHPTCloud/telegram-api/tree/master/documentation/ru/methods/DeleteMessage.md
     */
    case DELETE_MESSAGE = 'deleteMessage';
}
