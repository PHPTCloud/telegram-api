<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\InlineKeyboardButtonArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\InlineKeyboardButtonArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;

class InlineKeyboardButtonArgumentArraySerializer implements InlineKeyboardButtonArgumentArraySerializerInterface
{
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
        }

        if ($argument->getLoginUrl()) {
        }

        if ($argument->getSwitchInlineQuery()) {
            $data[TelegramApiFieldEnum::SWITCH_INLINE_QUERY->value] = $argument->getSwitchInlineQuery();
        }

        if ($argument->getSwitchInlineQueryCurrentChat()) {
            $data[TelegramApiFieldEnum::SWITCH_INLINE_QUERY_CURRENT_CHAT->value] = $argument->getSwitchInlineQueryChosenChat();
        }

        if ($argument->getSwitchInlineQueryChosenChat()) {
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
