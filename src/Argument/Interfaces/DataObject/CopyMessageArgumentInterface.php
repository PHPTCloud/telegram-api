<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Используйте этот метод для копирования сообщений любого типа. Служебные сообщения, сообщения о розыг
 * рышах, сообщения о победителях розыгрышей и сообщения о счетах не могут быть скопированы. Опрос викт
 * орины можно скопировать только в том случае, если боту известно значение поля Correct_option_id. Мет
 * од аналогичен методу forwardMessage, но скопированное сообщение не имеет ссылки на исходное сообщени
 * е. Возвращает MessageId отправленного сообщения в случае успеха.
 *
 * @see     https://core.telegram.org/bots/api#copymessage
 */
interface CopyMessageArgumentInterface
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
     */
    public function getMessageId(): int;

    /**
     * Новая подпись для мультимедиа, 0–1024 символа после анализа сущностей. Если не указано, исходный заг
     * оловок сохраняется.
     */
    public function getCaption(): ?string;

    /**
     * Режим разбора сущностей в новой подписи. Дополнительные сведения см. в разделе «Параметры форматиров
     * ания».
     *
     * @see https://core.telegram.org/bots/api#formatting-options
     */
    public function getParseMode(): ?string;

    /**
     * Сериализованный в формате JSON список специальных объектов, которые появляются в новом заголовке, ко
     * торый можно указать вместо parse_mode.
     */
    public function getCaptionEntities(): ?array;

    /**
     * Отправляет сообщение молча. Пользователи получат уведомление без звука.
     */
    public function wantDisableNotification(): ?bool;

    /**
     * Защищает содержимое отправленного сообщения от пересылки и сохранения.
     */
    public function wantProtectContent(): ?bool;

    /**
     * Описание сообщения, на которое нужно ответить.
     */
    public function getReplyParameters(): ?ReplyParametersArgumentInterface;

    /**
     * Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для встроенной клавиа
     * туры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или принудительному
     * ответу пользователя.
     *
     * @see https://core.telegram.org/bots/features#inline-keyboards
     * @see https://core.telegram.org/bots/features#keyboards
     */
    public function getReplyMarkup(): InlineKeyboardMarkupArgumentInterface|ReplyKeyboardMarkupArgumentInterface|ReplyKeyboardRemoveArgumentInterface|ForceReplyArgumentInterface|null;

    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupArgumentInterface;

    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface;

    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface;

    public function getForceReply(): ?ForceReplyArgumentInterface;
}
