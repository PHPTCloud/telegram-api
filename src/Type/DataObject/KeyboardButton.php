<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\KeyboardButtonInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\KeyboardButtonPollTypeInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\KeyboardButtonRequestChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\KeyboardButtonRequestUsersInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WebAppInfoInterface;

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
class KeyboardButton implements KeyboardButtonInterface
{
    public function __construct(
        private readonly string $text,
        private readonly ?KeyboardButtonRequestUsersInterface $requestUsers = null,
        private readonly ?KeyboardButtonRequestChatInterface $requestChat = null,
        private readonly ?bool $requestContact = null,
        private readonly ?bool $requestLocation = null,
        private readonly ?KeyboardButtonPollTypeInterface $requestPoll = null,
        private readonly ?WebAppInfoInterface $webApp = null,
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getRequestUsers(): ?KeyboardButtonRequestUsersInterface
    {
        return $this->requestUsers;
    }

    public function getRequestChat(): ?KeyboardButtonRequestChatInterface
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

    public function getRequestPoll(): ?KeyboardButtonPollTypeInterface
    {
        return $this->requestPoll;
    }

    public function getWebApp(): ?WebAppInfoInterface
    {
        return $this->webApp;
    }
}
