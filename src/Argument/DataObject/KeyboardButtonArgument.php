<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonPollTypeArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonRequestChatArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\KeyboardButtonRequestUsersArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\WebAppInfoArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
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
class KeyboardButtonArgument implements KeyboardButtonArgumentInterface
{
    public function __construct(
        private readonly string $text,
        private readonly ?KeyboardButtonRequestUsersArgumentInterface $requestUsers = null,
        private readonly ?KeyboardButtonRequestChatArgumentInterface $requestChat = null,
        private readonly ?bool $requestContact = null,
        private readonly ?bool $requestLocation = null,
        private readonly ?KeyboardButtonPollTypeArgumentInterface $requestPoll = null,
        private readonly ?WebAppInfoArgumentInterface $webApp = null,
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getRequestUsers(): ?KeyboardButtonRequestUsersArgumentInterface
    {
        return $this->requestUsers;
    }

    public function getRequestChat(): ?KeyboardButtonRequestChatArgumentInterface
    {
        return $this->requestChat;
    }

    public function isRequestContact(): ?bool
    {
        return $this->requestContact;
    }

    public function isRequestLocation(): ?bool
    {
        return $this->requestLocation;
    }

    public function getRequestPoll(): ?KeyboardButtonPollTypeArgumentInterface
    {
        return $this->requestPoll;
    }

    public function getWebApp(): ?WebAppInfoArgumentInterface
    {
        return $this->webApp;
    }
}
