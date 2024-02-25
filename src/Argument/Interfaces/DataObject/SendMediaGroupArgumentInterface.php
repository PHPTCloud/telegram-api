<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

interface SendMediaGroupArgumentInterface extends ArgumentInterface
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
     * Массив, сериализованный в формате JSON, описывающий отправляемые сообщения, должен включать от 2 до
     * 10 элементов.
     *
     * @return InputMediaArgumentInterface[]
     * @return InputMediaPhotoArgumentInterface[]
     * @return InputMediaAudioArgumentInterface[]
     * @return InputMediaDocumentArgumentInterface[]
     * @return InputMediaVideoArgumentInterface[]
     */
    public function getMedia(): array;

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
}
