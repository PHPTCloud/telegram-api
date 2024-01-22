<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\DomainService\Enums;

/**
 * @author Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
enum TelegramApiMethodEnum: string
{
    /**
     * @link https://core.telegram.org/bots/api#getme
     *
     * Простой метод проверки токена аутентификации вашего бота. Не требует параметров. Возвращает основную
     * информацию о боте в виде объекта User (https://core.telegram.org/bots/api#user).
     */
    case GET_ME = 'getMe';

    /**
     * @link https://core.telegram.org/bots/api#logout
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
     * @link https://core.telegram.org/bots/api#close
     *
     * Используйте этот метод, чтобы закрыть экземпляр бота перед его перемещением с одного локального серв
     * ера на другой. Вам необходимо удалить веб-перехватчик перед вызовом этого метода, чтобы гарантироват
     * ь, что бот не запустится снова после перезапуска сервера. Метод вернет ошибку 429 в первые 10 минут
     * после запуска бота. Возвращает True в случае успеха. Не требует параметров.
     */
    case CLOSE = 'close';

    /**
     * @link https://core.telegram.org/bots/api#sendmessage
     *
     * Используйте этот метод для отправки текстовых сообщений. В случае успеха отправленное сообщение возв
     * ращается с типом Message (https://core.telegram.org/bots/api#message).
     */
    case SEND_MESSAGE = 'sendMessage';

    /**
     * @link https://core.telegram.org/bots/api#getchat
     *
     * Используйте этот метод, чтобы получить актуальную информацию о чате. В случае успеха возвращает объе
     * кт с типом Chat (https://core.telegram.org/bots/api#chat).
     */
    case GET_CHAT = 'getChat';
}
