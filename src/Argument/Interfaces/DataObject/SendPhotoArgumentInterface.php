<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Используйте этот метод для отправки фотографий. В случае успеха отправленное сообщение возвращается.
 *
 * @see     https://core.telegram.org/bots/api#sendphoto
 */
interface SendPhotoArgumentInterface
{
    /**
     * Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате @channelusern
     * ame).
     */
    public function getChatId(): int|float|string;

    /**
     * Фото для отправки. Передайте file_id в качестве строки, чтобы отправить фотографию, которая существу
     * ет на серверах Telegram (рекомендуется), передайте URL-адрес HTTP в качестве строки для Telegram, чт
     * обы получить фотографию из Интернета, или загрузите новую фотографию, используя multipart/form-data.
     * Размер фотографии должен быть не более 10 МБ. Ширина и высота фотографии в сумме не должны превышат
     * ь 10000. Соотношение ширины и высоты должно быть не более 20. Подробнее об отправке файлов».
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    public function getPhoto(): LocalFileArgumentInterface|string;

    /**
     * Уникальный идентификатор целевой ветки сообщений (темы) форума; только для супергрупп форума.
     */
    public function getMessageThreadId(): ?int;

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
     * Передайте True, если фотография должна быть покрыта анимацией спойлера.
     */
    public function hasSpoiler(): ?bool;

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
     * строенной клавиа туры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или
     * принудительному ответу пользователя.
     */
    public function getInlineKeyboardMarkup(): ?InlineKeyboardMarkupArgumentInterface;

    /**
     * Необязательный. Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для в
     * строенной клавиа туры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или
     * принудительному ответу пользователя.
     */
    public function getReplyKeyboardMarkup(): ?ReplyKeyboardMarkupArgumentInterface;

    /**
     * Необязательный. Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для в
     * строенной клавиа туры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или
     * принудительному ответу пользователя.
     */
    public function getReplyKeyboardRemove(): ?ReplyKeyboardRemoveArgumentInterface;

    /**
     * Необязательный. Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для в
     * строенной клавиа туры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или
     * принудительному ответу пользователя.
     */
    public function getForceReply(): ?ForceReplyArgumentInterface;
}
