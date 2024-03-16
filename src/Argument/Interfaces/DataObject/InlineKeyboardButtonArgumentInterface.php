<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект представляет собой одну кнопку встроенной клавиатуры. Вы должны использовать только одно
 * из необязательных полей.
 *
 * @see    https://core.telegram.org/bots/api#inlinekeyboardbutton
 */
interface InlineKeyboardButtonArgumentInterface extends ArgumentInterface
{
    /**
     * Текст метки на кнопке.
     */
    public function getText(): string;

    /**
     * Необязательный. URL-адрес HTTP или tg://, который будет открыт при нажатии кнопки. Ссылки tg://user?
     * id=<user_id> можно использовать для упоминания пользователя по его идентификатору без использования
     * имени пользователя, если это разрешено его настройками конфиденциальности.
     */
    public function getUrl(): ?string;

    /**
     * Необязательный. Данные, которые будут отправлены в обратном запросе боту при нажатии кнопки, 1–64
     * байта.
     *
     * @see https://core.telegram.org/bots/api#callbackquery
     */
    public function getCallbackData(): ?string;

    /**
     * Необязательный. Описание веб-приложения, которое будет запускаться при нажатии пользователем кнопки.
     * Веб-приложение сможет отправлять произвольное сообщение от имени пользователя с помощью метода
     * answerWebAppQuery. Доступно только в приватных чатах между пользователем и ботом.
     *
     * @see https://core.telegram.org/bots/webapps
     * @see https://core.telegram.org/bots/api#answerwebappquery
     */
    public function getWebApp(): ?WebAppInfoArgumentInterface;

    /**
     * Необязательный. URL-адрес HTTPS, используемый для автоматической авторизации пользователя. Может исп
     * ользоваться в качестве замены виджета входа в Telegram.
     *
     * @see https://core.telegram.org/widgets/login
     */
    public function getLoginUrl(): ?LoginUrlArgumentInterface;

    /**
     * Необязательный. Если установлено, нажатие кнопки предложит пользователю выбрать один из своих чатов,
     * открыть этот чат и вставить имя пользователя бота и указанный встроенный запрос в поле ввода. Может
     * быть пустым, в этом случае будет вставлено только имя пользователя бота.
     */
    public function getSwitchInlineQuery(): ?string;

    /**
     * Необязательный. Если установлено, нажатие кнопки вставит имя пользователя бота и указанный встроенны
     * й запрос в поле ввода текущего чата. Может быть пустым, в этом случае будет вставлено только имя пол
     * ьзователя бота.
     */
    public function getSwitchInlineQueryCurrentChat(): ?string;

    /**
     * Необязательный. Если установлено, нажатие кнопки предложит пользователю выбрать один из своих чатов
     * указанного типа, открыть этот чат и вставить имя пользователя бота и указанный встроенный запрос в п
     * оле ввода.
     */
    public function getSwitchInlineQueryChosenChat(): ?SwitchInlineQueryChosenChatArgumentInterface;

    /**
     * Необязательный. Укажите True, чтобы отправить кнопку «Оплатить».
     * Примечание: Кнопки этого типа всегда должны быть первой кнопкой в первом ряду и могут использоваться
     * только в сообщениях о счетах.
     */
    public function isPay(): ?bool;
}
