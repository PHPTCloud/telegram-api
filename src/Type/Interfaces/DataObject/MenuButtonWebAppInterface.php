<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author Пешко Илья peshkoi@mail.ru
 *
 * @version 1.0.0
 *
 * Предоставляет кнопку меню, которая запускает веб-приложение.
 *
 * @see https://core.telegram.org/bots/api#menubuttonwebapp
 */
interface MenuButtonWebAppInterface
{
    /**
     * Тип кнопки, должен быть 'web_app'.
     */
    public function getType(): string;

    /**
     * Текст на кнопке.
     */
    public function getText(): string;

    /**
     * Описание веб-приложения, которое будет запускаться при нажатии пользователем кнопки.
     * Веб-приложение сможет отправлять произвольное сообщение от имени пользователя с помощью метода
     * answerWebAppQuery.
     */
    public function getWebApp(): WebAppInfoInterface;
}
