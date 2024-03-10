<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект содержит информацию о пользователях, чьи идентификаторы были переданы боту с помощью кно
 * пки KeyboardButtonRequestUsers.
 *
 * @see    https://core.telegram.org/bots/api#keyboardbuttonrequestusers
 * @see    https://core.telegram.org/bots/api#usersshared
 */
interface UsersSharedInterface
{
    /**
     * Идентификатор запроса.
     */
    public function getRequestId(): int;

    /**
     * Идентификаторы общих пользователей. Эти числа могут иметь более 32 значащих битов, и в некоторых язы
     * ках программирования могут возникнуть трудности или неявные дефекты при их интерпретации. Но они име
     * ют не более 52 значащих битов, поэтому 64-битные целые числа или типы с плавающей запятой двойной то
     * чности безопасны для хранения этих идентификаторов. Бот может не иметь доступа к пользователям и не
     * сможет использовать эти идентификаторы, если только пользователи уже не известны боту каким-либо дру
     * гим способом.
     *
     * @return int[]|float[]
     */
    public function getUserIds(): array;
}
