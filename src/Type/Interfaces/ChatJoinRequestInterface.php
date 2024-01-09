<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Представляет запрос на присоединение, отправленный в чат.
 * @link    https://core.telegram.org/bots/api#chatjoinrequest
 */
interface ChatJoinRequestInterface
{
    /**
     * Чат, в который был отправлен запрос.
     *
     * @return ChatInterface
     */
    public function getChat(): ChatInterface;

    /**
     * Пользователь, отправивший запрос на присоединение.
     *
     * @return UserInterface
     */
    public function getFrom(): UserInterface;

    /**
     * Идентификатор приватного чата с пользователем, отправившим заявку на вступление. Это число может име
     * ть более 32 значащих битов, и в некоторых языках программирования могут возникнуть трудности или нея
     * вные дефекты при его интерпретации. Но он имеет не более 52 значащих битов, поэтому для хранения это
     * го идентификатора можно безопасно использовать 64-битное целое число или тип с плавающей запятой дво
     * йной точности. Бот может использовать этот идентификатор в течение 5 минут для отправки сообщений, п
     * ока запрос на присоединение не будет обработан, при условии, что с пользователем не связался ни один
     * другой администратор.
     *
     * @return int|float
     */
    public function getUserChatId(): int|float;

    /**
     * Дата отправки запроса по времени Unix.
     *
     * @return int
     */
    public function getDate(): int;

    /**
     * Необязательный. Биография пользователя.
     *
     * @return string|null
     */
    public function getBio(): ?string;

    /**
     * Необязательный. Ссылка для приглашения в чат, которая использовалась пользователем для отправки запр
     * оса на присоединение.
     *
     * @return ChatInviteLinkInterface|null
     */
    public function getInviteLink(): ?ChatInviteLinkInterface;
}
