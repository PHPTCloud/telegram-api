<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Используйте этот метод для отправки аудиофайлов, если вы хотите, чтобы клиенты Telegram отображали и
 * х в музыкальном проигрывателе. Ваш звук должен быть в формате .MP3 или .M4A. В случае успеха отправл
 * енное сообщение возвращается. Боты в настоящее время могут отправлять аудиофайлы размером до 50 МБ,
 * в будущем этот лимит может быть изменен.
 *
 * Вместо этого для отправки голосовых сообщений используйте метод sendVoice.
 *
 * @see     https://core.telegram.org/bots/api#sendvoice
 * @see     https://core.telegram.org/bots/api#sendaudio
 */
interface SendAudioArgumentInterface extends ArgumentInterface
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
     * Аудиофайл для отправки. Передайте file_id как строку, чтобы отправить аудиофайл, существующий на сер
     * верах Telegram (рекомендуется), передайте URL-адрес HTTP в качестве строки для Telegram, чтобы получ
     * ить аудиофайл из Интернета, или загрузите новый, используя multipart/form-data. Подробнее об отправк
     * е файлов».
     *
     * @see https://core.telegram.org/bots/api#sending-files
     */
    public function getAudio(): LocalFileArgumentInterface|string;

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
     * Исполнитель.
     */
    public function getPerformer(): ?string;

    /**
     * Название трека.
     */
    public function getTitle(): ?string;

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
