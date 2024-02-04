<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект определяет критерии, используемые для запроса подходящего чата. Идентификатор выбранного
 * чата будет передан боту при нажатии соответствующей кнопки.
 * Подробнее о запросе чатов » (@see https://core.telegram.org/bots/features#chat-and-user-selection)
 *
 * @link    https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 */
interface KeyboardButtonRequestChatInterface
{
    /**
     * Знаковый 32-битный идентификатор запроса, который будет получен обратно в объекте ChatShared. Должно
     * быть уникальным в сообщении.
     *
     * @return int|float
     */
    public function getRequestId(): int|float;

    /**
     * Передайте True, чтобы запросить чат канала, передайте False, чтобы запросить групповой или супергруп
     * повой чат.
     *
     * @return bool
     */
    public function chatIsChannel(): bool;

    /**
     * Необязательный. Передайте True, чтобы запросить супергруппу форума, передайте False, чтобы запросить
     * чат вне форума. Если не указано, дополнительные ограничения не применяются.
     *
     * @return bool|null
     */
    public function chatIsForum(): ?bool;

    /**
     * Необязательный. Передайте True, чтобы запросить супергруппу или канал с именем пользователя, передай
     * те False, чтобы запросить чат без имени пользователя. Если не указано, дополнительные ограничения не
     * применяются.
     *
     * @return bool|null
     */
    public function chatHasUsername(): ?bool;

    /**
     * Необязательный. Передайте значение True, чтобы запросить чат, принадлежащий пользователю. В противно
     * м случае дополнительные ограничения не применяются.
     *
     * @return bool|null
     */
    public function chatIsCreated(): ?bool;

    /**
     * Необязательный. Объект в формате JSON, в котором перечислены необходимые права администратора пользо
     * вателя в чате. Права должны быть расширенным набором bot_administrator_rights. Если не указано, допо
     * лнительные ограничения не применяются.
     *
     * @return ChatAdministratorRightsInterface|null
     */
    public function getUserAdministratorRights(): ?ChatAdministratorRightsInterface;

    /**
     * Необязательный. Объект в формате JSON, в котором перечислены необходимые права администратора бота в
     * чате. Права должны быть подмножеством user_administrator_rights. Если не указано, дополнительные ог
     * раничения не применяются.
     *
     * @return ChatAdministratorRightsInterface|null
     */
    public function getBotAdministratorRights(): ?ChatAdministratorRightsInterface;

    /**
     * Необязательный. Передайте значение True, чтобы запросить чат с ботом в качестве участника. В противн
     * ом случае дополнительные ограничения не применяются.
     *
     * @return bool|null
     */
    public function botIsMember(): ?bool;
}
