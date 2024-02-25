<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SendVoiceArgumentInterface extends ArgumentInterface
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
     * Аудиофайл для отправки. Передайте file_id как строку, чтобы отправить файл, который существует на се
     * рверах Telegram (рекомендуется), передайте URL-адрес HTTP как строку, чтобы Telegram получил файл из
     * Интернета, или загрузите новый, используя multipart/form-data.
     */
    public function getVoice(): LocalFileArgumentInterface|string;

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
     * Сериализованный в формате JSON список специальных объектов, отображаемых в заголовке, который можно
     * указать вместо parse_mode.
     *
     * @return MessageEntityArgumentInterface[]|null
     */
    public function getCaptionEntities(): ?array;

    /**
     * Продолжительность звука в секундах.
     */
    public function getDuration(): ?int;

    /**
     * Необязательный. Отправляет сообщение молча. Пользователи получат уведомление без звука.
     */
    public function wantDisableNotification(): ?bool;

    /**
     * Необязательный. Защищает содержимое отправленного сообщения от пересылки и сохранения.
     */
    public function wantProtectContent(): ?bool;

    /**
     * Необязательный. Описание сообщения, на которое нужно ответить.
     */
    public function getReplyParameters(): ?ReplyParametersArgumentInterface;

    /**
     * Необязательный. Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для в
     * строенной клавиатуры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или
     * принудительному ответу пользователя.
     */
    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupArgumentInterface;

    /**
     * Необязательный. Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для в
     * строенной клавиатуры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или
     * принудительному ответу пользователя.
     */
    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface;

    /**
     * Необязательный. Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для в
     * строенной клавиатуры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или
     * принудительному ответу пользователя.
     */
    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface;

    /**
     * Необязательный. Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для в
     * строенной клавиатуры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или
     * принудительному ответу пользователя.
     */
    public function getForceReply(): ?ForceReplyArgumentInterface;
}
