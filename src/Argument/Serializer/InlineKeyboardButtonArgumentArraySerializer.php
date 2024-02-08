<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\LoginUrlArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\SwitchInlineQueryChosenChatArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\WebAppInfoArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class InlineKeyboardButtonArgumentArraySerializer implements InlineKeyboardButtonArgumentArraySerializerInterface
{
    public function __construct(
        private readonly WebAppInfoArgumentArraySerializerInterface $webAppInfoArgumentArraySerializer,
        private readonly LoginUrlArgumentArraySerializerInterface $loginUrlArgumentArraySerializer,
        private readonly SwitchInlineQueryChosenChatArgumentArraySerializerInterface $switchInlineQueryChosenChatArgumentArraySerializer,
    ) {
    }

    public function serialize(InlineKeyboardButtonArgumentInterface $argument): array
    {
        $data = [];

        $data[TelegramApiFieldEnum::TEXT->value] = $argument->getText();

        if ($argument->getUrl()) {
            $data[TelegramApiFieldEnum::URL->value] = $argument->getUrl();
        }

        if ($argument->getCallbackData()) {
            $data[TelegramApiFieldEnum::CALLBACK_DATA->value] = $argument->getCallbackData();
        }

        if ($argument->getWebApp()) {
            $data[TelegramApiFieldEnum::WEB_APP->value]
                = $this->webAppInfoArgumentArraySerializer->serialize($argument->getWebApp());
        }

        if ($argument->getLoginUrl()) {
            $data[TelegramApiFieldEnum::LOGIN_URL->value]
                = $this->loginUrlArgumentArraySerializer->serialize($argument->getLoginUrl());
        }

        if ($argument->getSwitchInlineQuery()) {
            $data[TelegramApiFieldEnum::SWITCH_INLINE_QUERY->value] = $argument->getSwitchInlineQuery();
        }

        if ($argument->getSwitchInlineQueryCurrentChat()) {
            $data[TelegramApiFieldEnum::SWITCH_INLINE_QUERY_CURRENT_CHAT->value] = $argument->getSwitchInlineQueryCurrentChat();
        }

        if ($argument->getSwitchInlineQueryChosenChat()) {
            $data[TelegramApiFieldEnum::SWITCH_INLINE_QUERY_CHOSEN_CHAT->value]
                = $this->switchInlineQueryChosenChatArgumentArraySerializer->serialize($argument->getSwitchInlineQueryChosenChat());
        }

        if (null !== $argument->isPay()) {
            $data[TelegramApiFieldEnum::PAY->value] = $argument->isPay();
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
