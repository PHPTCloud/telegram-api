<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой одну кнопку встроенной клавиатуры. Вы должны использовать только одно
 * из необязательных полей.
 * @link    hhttps://core.telegram.org/bots/api#inlinekeyboardbutton
 */
interface InlineKeyboardButtonInterface
{
    /**
     * Текст метки на кнопке.
     *
     * @return string
     */
    public function getText(): string;

    /**
     * Необязательный. URL-адрес HTTP или tg://, который будет открыт при нажатии кнопки. Ссылки tg://user?
     * id=<user_id> можно использовать для упоминания пользователя по его идентификатору без использования
     * имени пользователя, если это разрешено его настройками конфиденциальности.
     *
     * @return string|null
     */
    public function getUrl(): ?string;

    /**
     * Необязательный. Данные, которые будут отправлены в обратном запросе боту при нажатии кнопки, 1–64
     * байта.
     *
     * @link https://core.telegram.org/bots/api#callbackquery
     * @return string|null
     */
    public function getCallbackData(): ?string;

    /**
     * Необязательный. Описание веб-приложения, которое будет запускаться при нажатии пользователем кнопки.
     * Веб-приложение сможет отправлять произвольное сообщение от имени пользователя с помощью метода
     * answerWebAppQuery. Доступно только в приватных чатах между пользователем и ботом.
     *
     * @link https://core.telegram.org/bots/webapps
     * @link https://core.telegram.org/bots/api#answerwebappquery
     * @return WebAppInfoInterface|null
     */
    public function getWebApp(): ?WebAppInfoInterface;

    /**
     * Необязательный. URL-адрес HTTPS, используемый для автоматической авторизации пользователя. Может исп
     * ользоваться в качестве замены виджета входа в Telegram.
     *
     * @link https://core.telegram.org/widgets/login
     * @return LoginUrlInterface|null
     */
    public function getLoginUrl(): ?LoginUrlInterface;

    /**
     * Необязательный. Если установлено, нажатие кнопки предложит пользователю выбрать один из своих чатов,
     * открыть этот чат и вставить имя пользователя бота и указанный встроенный запрос в поле ввода. Может
     * быть пустым, в этом случае будет вставлено только имя пользователя бота.
     *
     * @return string|null
     */
    public function getSwitchInlineQuery(): ?string;

    /**
     * Необязательный. Если установлено, нажатие кнопки вставит имя пользователя бота и указанный встроенны
     * й запрос в поле ввода текущего чата. Может быть пустым, в этом случае будет вставлено только имя пол
     * ьзователя бота.
     *
     * @return string|null
     */
    public function getSwitchInlineQueryCurrentChat(): ?string;

    /**
     * Необязательный. Если установлено, нажатие кнопки предложит пользователю выбрать один из своих чатов
     * указанного типа, открыть этот чат и вставить имя пользователя бота и указанный встроенный запрос в п
     * оле ввода.
     *
     * @return SwitchInlineQueryChosenChatInterface|null
     */
    public function getSwitchInlineQueryChosenChat(): ?SwitchInlineQueryChosenChatInterface;

    /**
     * Необязательный. Описание игры, которая будет запускаться при нажатии пользователем кнопки.
     * Примечание: Кнопки этого типа всегда должны быть первой кнопкой в первом ряду.
     *
     * @return CallbackGameInterface|null
     */
    public function getCallbackGame(): ?CallbackGameInterface;

    /**
     * Необязательный. Укажите True, чтобы отправить кнопку «Оплатить».
     * Примечание: Кнопки этого типа всегда должны быть первой кнопкой в первом ряду и могут использоваться
     * только в сообщениях о счетах.
     *
     * @return bool|null
     */
    public function isPay(): ?bool;
}
