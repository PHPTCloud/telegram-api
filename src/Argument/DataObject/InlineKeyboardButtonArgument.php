<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\LoginUrlArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\SwitchInlineQueryChosenChatArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\WebAppInfoArgumentInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class InlineKeyboardButtonArgument implements InlineKeyboardButtonArgumentInterface
{
    public function __construct(
        private readonly string $text,
        private readonly ?string $url = null,
        private readonly ?string $callbackData = null,
        private readonly ?WebAppInfoArgumentInterface $webApp = null,
        private readonly ?LoginUrlArgumentInterface $loginUrl = null,
        private readonly ?string $switchInlineQuery = null,
        private readonly ?string $switchInlineQueryCurrentChat = null,
        private readonly ?SwitchInlineQueryChosenChatArgumentInterface $switchInlineQueryChosenChat = null,
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

    public function getWebApp(): ?WebAppInfoArgumentInterface
    {
        return $this->webApp;
    }

    public function getLoginUrl(): ?LoginUrlArgumentInterface
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

    public function getSwitchInlineQueryChosenChat(): ?SwitchInlineQueryChosenChatArgumentInterface
    {
        return $this->switchInlineQueryChosenChat;
    }

    public function isPay(): ?bool
    {
        return $this->pay;
    }
}
