<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface SendVideoNoteArgumentInterface extends ArgumentInterface
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
     * Видеозаметка для отправки. Передайте file_id как строку, чтобы отправить видеозаметку, существующую
     * на серверах Telegram (рекомендуется), или загрузить новое видео, используя multipart/form-data. Подр
     * обнее об отправке файлов». Отправка видеозаметок по URL-адресу в настоящее время не поддерживается.
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    public function getVideoNote(): LocalFileArgumentInterface|string;

    /**
     * Длительность отправляемого видео в секундах.
     */
    public function getDuration(): ?int;

    /**
     * Ширина и высота видео, т.е. диаметр видеосообщения.
     */
    public function getLength(): ?int;

    /**
     * Миниатюра отправленного файла; можно игнорировать, если создание миниатюр для файла поддерживается н
     * а стороне сервера. Миниатюра должна быть в формате JPEG и размером не более 200 КБ. Ширина и высота
     * миниатюры не должны превышать 320. Игнорируется, если файл не загружен с использованием multipart/fo
     * rm-data. Миниатюры нельзя использовать повторно, их можно загрузить только как новый файл, поэтому в
     * ы можете передать «attach://<file_attach_name>», если миниатюра была загружена с использованием mult
     * ipart/form-data в <file_attach_name>. Дополнительная информация об отправке файлов ».
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    public function getThumbnail(): LocalFileArgumentInterface|string|null;

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
