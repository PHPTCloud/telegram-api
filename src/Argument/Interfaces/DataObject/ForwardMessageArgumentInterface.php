<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Используйте этот метод для пересылки сообщений любого типа. Служебные сообщения и сообщения с защище
 * нным содержимым пересылаться не могут. В случае успеха отправленное Message возвращается.
 *
 * @see     https://core.telegram.org/bots/api#forwardmessage
 */
interface ForwardMessageArgumentInterface
{
    /**
     * Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusern
     * ame).
     */
    public function getChatId(): int|float|string;

    /**
     * Уникальный идентификатор целевой ветки сообщений (темы) форума; только для супергрупп форума.
     */
    public function getMessageThreadId(): ?int;

    /**
     * Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusern
     * ame).
     */
    public function getFromChatId(): int|float|string;

    /**
     * Отправляет сообщение молча. Пользователи получат уведомление без звука.
     */
    public function wantDisableNotification(): ?bool;

    /**
     * Защищает содержимое пересылаемого сообщения от пересылки и сохранения.
     */
    public function wantProtectContent(): ?bool;

    /**
     * Идентификатор сообщения в чате, указанный в from_chat_id.
     */
    public function getMessageId(): int;
}
