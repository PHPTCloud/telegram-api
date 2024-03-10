<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет входящий запрос обратного вызова от кнопки обратного вызова на встроенной к
 * лавиатуре. Если кнопка, вызвавшая запрос, была прикреплена к сообщению, отправленному ботом, поле me
 * ssage будет присутствовать. Если кнопка была прикреплена к сообщению, отправленному через бота (в ин
 * лайн-режиме), то поле inline_message_id будет присутствовать. Будет присутствовать ровно одно из пол
 * ей data или game_short_name.
 *
 * ПРИМЕЧАНИЕ. После того, как пользователь нажмет кнопку обратного вызова, клиенты Telegram будут отоб
 * ражать индикатор выполнения, пока вы не вызовете answerCallbackQuery. Поэтому необходимо отреагироват
 * ь вызовом answerCallbackQuery, даже если уведомление пользователя не требуется (например, без указан
 * ия каких-либо дополнительных параметров).
 *
 * @see    https://core.telegram.org/bots/api#callbackquery
 * @see    https://core.telegram.org/bots/features#inline-keyboards
 * @see    https://core.telegram.org/bots/api#inline-mode
 * @see    https://core.telegram.org/bots/api#answercallbackquery
 */
interface CallbackQueryInterface
{
    /**
     * Уникальный идентификатор для этого запроса.
     */
    public function getId(): string;

    /**
     * Отправитель.
     */
    public function getFrom(): UserInterface;

    /**
     * Необязательный. Сообщение, отправленное ботом с помощью кнопки обратного вызова, вызвавшей запрос.
     */
    public function getMessage(): MaybeInaccessibleMessageInterface;

    /**
     * Необязательный. Идентификатор сообщения, отправленного через бот во встроенном режиме, из которого б
     * ыл отправлен запрос.
     */
    public function getInlineMessageId(): ?string;

    /**
     * Глобальный идентификатор, однозначно соответствующий чату, в который было отправлено сообщение с кно
     * пкой обратного звонка. Полезно для высоких результатов в играх.
     */
    public function getChatInstance(): string;

    /**
     * Необязательный. Данные, связанные с кнопкой обратного вызова. Имейте в виду, что сообщение, породивш
     * ее запрос, не может содержать кнопок обратного вызова с этими данными.
     */
    public function getData(): ?string;

    /**
     * Необязательный. Краткое название возвращаемой Игры служит уникальным идентификатором игры.
     */
    public function getGameShortName(): ?string;
}
