<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект содержит информацию о чате, идентификатор которого был передан боту с помощью кнопки
 * KeyboardButtonRequestChat.
 *
 * @see    https://core.telegram.org/bots/api#chatshared
 */
interface ChatSharedInterface
{
    /**
     * Идентификатор запроса.
     *
     * @return int
     */
    public function getRequestId(): int|float;

    /**
     * Идентификатор общего чата. Это число может иметь более 32 значащих битов, и в некоторых языках прогр
     * аммирования могут возникнуть трудности или неявные дефекты при его интерпретации. Но он имеет не бол
     * ее 52 значащих битов, поэтому для хранения этого идентификатора можно безопасно использовать 64-битн
     * ое целое число или тип с плавающей запятой двойной точности. Бот может не иметь доступа к чату и не
     * сможет использовать этот идентификатор, если чат уже не известен боту каким-либо другим способом.
     */
    public function getChatId(): int|float;
}
