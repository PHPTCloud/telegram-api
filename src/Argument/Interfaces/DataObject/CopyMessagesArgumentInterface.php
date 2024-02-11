<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Используйте этот метод для копирования сообщений любого типа. Если некоторые из указанных сообщений
 * невозможно найти или скопировать, они пропускаются. Служебные сообщения, сообщения о розыгрышах, соо
 * бщения о победителях розыгрышей и сообщения о счетах не могут быть скопированы. Опрос викторины можн
 * о скопировать только в том случае, если значение поля Correct_option_id известно боту. Метод аналоги
 * чен методу forwardMessages, но скопированные сообщения не имеют ссылки на исходное сообщение. Группи
 * ровка альбомов сохраняется для скопированных сообщений. В случае успеха возвращается массив MessageI
 * d отправленных сообщений.
 *
 * @see     https://core.telegram.org/bots/api#copymessages
 */
interface CopyMessagesArgumentInterface extends ArgumentInterface
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
     * Идентификатор сообщения в чате, указанный в from_chat_id.
     *
     * @return int[]
     */
    public function getMessageIds(): array;

    /**
     * Отправляет сообщение молча. Пользователи получат уведомление без звука.
     */
    public function wantDisableNotification(): ?bool;

    /**
     * Защищает содержимое отправленного сообщения от пересылки и сохранения.
     */
    public function wantProtectContent(): ?bool;

    /**
     * Передайте True, чтобы скопировать сообщения без заголовков.
     */
    public function wantRemoveCaption(): ?bool;
}
