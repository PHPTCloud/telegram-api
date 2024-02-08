<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой одну кнопку клавиатуры ответа. Для простых текстовых кнопок вместо эт
 * ого объекта можно использовать String, чтобы указать текст кнопки. Необязательные поля web_app,
 * request_users, request_chat, request_contact, request_location и request_poll являются
 * взаимоисключающими.
 *
 * Примечание. Параметры request_users и request_chat будут работать только в версиях Telegram, выпущен
 * ных после 3 февраля 2023 г. В старых клиентах будет отображаться неподдерживаемое сообщение.
 *
 * @see    https://core.telegram.org/bots/api#keyboardbutton
 */
interface KeyboardButtonInterface
{
    /**
     * Текст кнопки. Если ни одно из необязательных полей не используется, оно будет отправлено в виде сооб
     * щения при нажатии кнопки.
     */
    public function getText(): string;

    /**
     * Необязательный. Если указано, нажатие кнопки откроет список подходящих пользователей. Идентификаторы
     * выбранных пользователей будут отправлены боту в служебном сообщении «users_shared». Доступно только
     * в приватных чатах.
     */
    public function getRequestUsers(): ?KeyboardButtonRequestUsersInterface;

    /**
     * Необязательный. Если указано, нажатие кнопки откроет список подходящих чатов. При нажатии на чат боту
     * будет отправлен его идентификатор в служебном сообщении «chat_shared». Доступно только в приватных
     * чатах.
     */
    public function getRequestChat(): ?KeyboardButtonRequestChatInterface;

    /**
     * Необязательный. Если установлено значение True, номер телефона пользователя будет отправлен в качест
     * ве контакта при нажатии кнопки. Доступно только в приватных чатах.
     */
    public function isRequestContact(): ?bool;

    /**
     * Необязательный. Если True, текущее местоположение пользователя будет отправлено при нажатии кнопки.
     * Доступно только в приватных чатах.
     */
    public function isRequestLocation(): ?bool;

    /**
     * Необязательный. Если указано, пользователю будет предложено создать опрос и отправить его боту при н
     * ажатии кнопки. Доступно только в приватных чатах.
     */
    public function getRequestPoll(): ?KeyboardButtonPollTypeInterface;

    /**
     * Необязательный. Если указано, описанное веб-приложение будет запускаться при нажатии кнопки. Веб-при
     * ложение сможет отправлять служебное сообщение «web_app_data». Доступно только в приватных чатах.
     */
    public function getWebApp(): ?WebAppInfoInterface;
}
