<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект определяет критерии, используемые для запроса подходящих пользователей. Идентификаторы в
 * ыбранных пользователей будут переданы боту при нажатии соответствующей кнопки. Подробнее о запросе п
 * ользователей » (@see https://core.telegram.org/bots/features#chat-and-user-selection)
 *
 * @see    https://core.telegram.org/bots/api#keyboardbuttonrequestusers
 * @see    https://core.telegram.org/bots/features#chat-and-user-selection
 */
interface KeyboardButtonRequestUsersArgumentInterface extends ArgumentInterface
{
    /**
     * Знаковый 32-битный идентификатор запроса, который будет получен обратно в объекте UsersShared.
     * Должно быть уникальным в сообщении.
     *
     * Примечание: Уникальность этого параметры вы должны обеспечить самостоятельно в своей системе.
     * Telegram API не проверяет уникальность этого параметра.
     *
     * @return int
     */
    public function getRequestId(): int|float;

    /**
     * Необязательный. Передайте True для запроса ботов и False для запроса обычных пользователей. Если не
     * указано, дополнительные ограничения не применяются.
     */
    public function userIsBot(): ?bool;

    /**
     * Необязательный. Передайте True, чтобы запросить премиум-пользователей, передайте False, чтобы запрос
     * ить непремиум-пользователей. Если не указано, дополнительные ограничения не применяются.
     */
    public function userIsPremium(): ?bool;

    /**
     * Необязательный. Максимальное количество пользователей, которые будут выбраны; 1-10. По умолчанию 1.
     */
    public function getMaxQuantity(): ?int;
}
