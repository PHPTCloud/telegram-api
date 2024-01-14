<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces;

use PHPTCloud\TelegramApi\Type\DataObject\LinkPreviewOptions;
use PHPTCloud\TelegramApi\Type\Interfaces\ForceReplyInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\InlineKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\LinkPreviewOptionsInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\MessageEntityArgumentInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ReplyKeyboardMarkupInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ReplyKeyboardRemoveInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ReplyParametersInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Метод "sendMessage".
 * Используйте этот метод для отправки текстовых сообщений. В случае успеха отправленное Message возв
 * ращается.
 *
 * @link    https://core.telegram.org/bots/api#sendmessage
 * @link    https://core.telegram.org/bots/api#message
 */
interface MessageArgumentInterface
{
    /**
     * Уникальный идентификатор целевого чата или имя пользователя целевого канала (в формате
     * @channelusername).
     *
     * @return string|int|float|null
     */
    public function getChatId(): string|int|float|null;

    public function setChatId(string|int|float $chatId): void;

    /**
     * Необязательный. Уникальный идентификатор целевой ветки сообщений (темы) форума; только для супергруп
     * п форума.
     *
     * @return int|null
     */
    public function getMessageThreadId(): ?int;

    public function setMessageThreadId(?int $messageThreadId = null): void;

    /**
     * Текст отправляемого сообщения, 1-4096 символов после анализа сущностей.
     *
     * @return string|null
     */
    public function getText(): ?string;

    public function setText(string $text): void;

    /**
     * Необязательный. Режим разбора сущностей в тексте сообщения. Дополнительные сведения см. в разделе «П
     * араметры форматирования».
     *
     * @link https://core.telegram.org/bots/api#formatting-options
     * @return string|null
     */
    public function getParseMode(): ?string;

    public function setParseMode(?string $parseMode = null): void;

    /**
     * Необязательный. Сериализованный в формате JSON список специальных сущностей, которые появляются в тексте
     * сообщения и которые можно указать вместо parse_mode.
     *
     * @return MessageEntityArgumentInterface|null
     */
    public function getEntities(): ?array;

    /**
     * @param MessageEntityArgumentInterface[]|null $entities
     *
     * @return void
     */
    public function setEntities(?array $entities = null): void;

    public function addEntity(MessageEntityArgumentInterface $entity): void;

    /**
     * Необязательный. Параметры создания предварительного просмотра ссылки для сообщения.
     *
     * @return LinkPreviewOptionsInterface|LinkPreviewOptionsArgumentInterface|null
     */
    public function getLinkPreviewOptions(): LinkPreviewOptionsInterface|LinkPreviewOptionsArgumentInterface|null;

    public function setLinkPreviewOptions(LinkPreviewOptionsInterface|LinkPreviewOptionsArgumentInterface|null $linkPreviewOptions = null): void;

    /**
     * Необязательный. Отправляет сообщение молча. Пользователи получат уведомление без звука.
     *
     * @return bool|null
     */
    public function isNotificationDisabled(): ?bool;

    public function setNotificationDisabled(?bool $notificationDisabled = null): void;

    /**
     * Необязательный. Защищает содержимое отправленного сообщения от пересылки и сохранения.
     *
     * @return bool|null
     */
    public function isContentProtected(): ?bool;

    public function setContentProtected(?bool $contentProtected = null): void;

    /**
     * Необязательный. Описание сообщения, на которое нужно ответить.
     *
     * @return ReplyParametersInterface|null
     */
    public function getReplyParameters(): ?ReplyParametersInterface;

    public function setReplyParameters(?ReplyParametersInterface $replyParameters = null): void;

    /**
     * Необязательный. Дополнительные возможности интерфейса. Объект, сериализованный в формате JSON, для в
     * строенной клавиа туры, настраиваемой клавиатуры ответа, инструкций по удалению клавиатуры ответа или
     * принудительному ответу пользователя.
     *
     * @return InlineKeyboardMarkupInterface|ReplyKeyboardMarkupInterface|ReplyKeyboardRemoveInterface|ForceReplyInterface|null
     */
    public function getReplyMarkup(): InlineKeyboardMarkupInterface|ReplyKeyboardMarkupInterface|ReplyKeyboardRemoveInterface|ForceReplyInterface|null;

    public function setReplyMarkup(InlineKeyboardMarkupInterface|ReplyKeyboardMarkupInterface|ReplyKeyboardRemoveInterface|ForceReplyInterface|null $replyMarkup = null): void;

    public function setInlineKeyboardMarkup(?InlineKeyboardMarkupInterface $replyMarkup = null): void;

    public function setReplyKeyboardMarkup(?ReplyKeyboardMarkupInterface $replyMarkup = null): void;

    public function setReplyKeyboardRemove(?ReplyKeyboardRemoveInterface $replyMarkup = null): void;

    public function setForceReply(?ForceReplyInterface $replyMarkup = null): void;
}
