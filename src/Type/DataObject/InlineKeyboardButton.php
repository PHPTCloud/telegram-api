<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\CallbackGameInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\InlineKeyboardButtonInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\LoginUrlInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\SwitchInlineQueryChosenChatInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\WebAppInfoInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект представляет собой одну кнопку встроенной клавиатуры. Вы должны использовать только одно
 * из необязательных полей.
 *
 * @see     hhttps://core.telegram.org/bots/api#inlinekeyboardbutton
 */
class InlineKeyboardButton implements InlineKeyboardButtonInterface
{
    public function __construct(
        private readonly string $text,
        private readonly ?string $url = null,
        private readonly ?string $callbackData = null,
        private readonly ?WebAppInfoInterface $webApp = null,
        private readonly ?LoginUrlInterface $loginUrl = null,
        private readonly ?string $switchInlineQuery = null,
        private readonly ?string $switchInlineQueryCurrentChat = null,
        private readonly ?SwitchInlineQueryChosenChatInterface $switchInlineQueryChosenChat = null,
        private readonly ?CallbackGameInterface $callbackGame = null,
        private readonly ?bool $pay = null,
    ) {
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function getCallbackData(): ?string
    {
        return $this->callbackData;
    }

    public function getWebApp(): ?WebAppInfoInterface
    {
        return $this->webApp;
    }

    public function getLoginUrl(): ?LoginUrlInterface
    {
        return $this->loginUrl;
    }

    public function getSwitchInlineQuery(): ?string
    {
        return $this->switchInlineQuery;
    }

    public function getSwitchInlineQueryCurrentChat(): ?string
    {
        return $this->switchInlineQueryCurrentChat;
    }

    public function getSwitchInlineQueryChosenChat(): ?SwitchInlineQueryChosenChatInterface
    {
        return $this->switchInlineQueryChosenChat;
    }

    public function getCallbackGame(): ?CallbackGameInterface
    {
        return $this->callbackGame;
    }

    public function isPay(): ?bool
    {
        return $this->pay;
    }
}
