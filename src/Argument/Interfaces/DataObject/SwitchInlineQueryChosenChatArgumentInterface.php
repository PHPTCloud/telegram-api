<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Этот объект представляет собой встроенную кнопку, которая переключает текущего пользователя во встро
 * енный режим в выбранном чате с дополнительным встроенным запросом по умолчанию.
 *
 * @see     https://core.telegram.org/bots/api#switchinlinequerychosenchat
 */
interface SwitchInlineQueryChosenChatArgumentInterface
{
    /**
     * Необязательный. Встроенный запрос по умолчанию, который будет вставлен в поле ввода. Если оставить п
     * устым, будет вставлено только имя пользователя бота.
     */
    public function getQuery(): ?string;

    /**
     * Необязательный. True, если можно выбрать приватные чаты с пользователями.
     */
    public function allowUserChats(): ?bool;

    /**
     * Необязательный. True, если можно выбрать приватные чаты с ботами.
     */
    public function allowBotChats(): ?bool;

    /**
     * Необязательный. True, если можно выбрать групповые и супергрупповые чаты.
     */
    public function allowGroupChats(): ?bool;

    /**
     * Необязательный. True, если чаты канала можно выбирать.
     */
    public function allowChannelChats(): ?bool;
}
