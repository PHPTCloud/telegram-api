<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Factory;

use PHPTCloud\TelegramApi\Exception\Error\BotDomainInvalidException;
use PHPTCloud\TelegramApi\Exception\Error\BotIsNotAMemberOfTheChatException;
use PHPTCloud\TelegramApi\Exception\Error\ButtonIdInvalidException;
use PHPTCloud\TelegramApi\Exception\Error\ButtonQuantityMaxInvalidException;
use PHPTCloud\TelegramApi\Exception\Error\ButtonTypeInvalidException;
use PHPTCloud\TelegramApi\Exception\Error\CantFindFieldException;
use PHPTCloud\TelegramApi\Exception\Error\CantParseInlineKeyboardButtonException;
use PHPTCloud\TelegramApi\Exception\Error\MessageCantBeForwardedException;
use PHPTCloud\TelegramApi\Exception\Error\MessageIdsMustBeInIncreasingOrderException;
use PHPTCloud\TelegramApi\Exception\Error\MessageToForwardNotFoundException;
use PHPTCloud\TelegramApi\Exception\Error\TelegramApiException;
use PHPTCloud\TelegramApi\Exception\Error\UnsupportedParseModeException;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Exception\Interfaces\TelegramApiExceptionInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
class ExceptionAbstractFactory implements ExceptionAbstractFactoryInterface
{
    public function createByApiErrorMessage(string $message): ?TelegramApiExceptionInterface
    {
        $message = strtolower($message);

        if (str_contains($message, $this->getUnsupportedMessagePart())) {
            return new UnsupportedParseModeException($message);
        } elseif (str_contains($message, $this->getCantFindFieldMessagePart())) {
            return new CantFindFieldException($message);
        } elseif (str_contains($message, $this->getCantParseInlineKeyboardButtonMessagePart())) {
            return new CantParseInlineKeyboardButtonException($message);
        } elseif (str_contains($message, $this->getButtonQuantityMaxInvalidMessagePart())) {
            return new ButtonQuantityMaxInvalidException($message);
        } elseif (str_contains($message, $this->getButtonIdInvalidMessagePart())) {
            return new ButtonIdInvalidException($message);
        } elseif (str_contains($message, $this->getBotDomainInvalidMessagePart())) {
            return new BotDomainInvalidException($message);
        } elseif (str_contains($message, $this->getButtonTypeInvalidMessagePart())) {
            return new ButtonTypeInvalidException($message);
        } elseif (str_contains($message, $this->getMessageToForwardNotFoundMessagePart())) {
            return new MessageToForwardNotFoundException($message);
        } elseif (str_contains($message, $this->getBotIsNotAMemberOfTheChatMessagePart())) {
            return new BotIsNotAMemberOfTheChatException($message);
        } elseif (str_contains($message, $this->getMessageCantBeForwardedMessagePart())) {
            return new MessageCantBeForwardedException($message);
        } elseif (str_contains($message, $this->getMessageIdsMustBeInIncreasingOrderMessagePart())) {
            return new MessageIdsMustBeInIncreasingOrderException($message);
        }

        return new TelegramApiException($message);
    }

    private function getUnsupportedMessagePart(): string
    {
        return 'unsupported parse_mode';
    }

    private function getCantFindFieldMessagePart(): string
    {
        return 'can\'t find field';
    }

    private function getCantParseInlineKeyboardButtonMessagePart(): string
    {
        return 'can\'t parse inline keyboard button';
    }

    private function getButtonQuantityMaxInvalidMessagePart(): string
    {
        return 'button_quantity_max_invalid';
    }

    private function getButtonIdInvalidMessagePart(): string
    {
        return 'button_id_invalid';
    }

    private function getBotDomainInvalidMessagePart(): string
    {
        return 'bot_domain_invalid';
    }

    private function getButtonTypeInvalidMessagePart(): string
    {
        return 'button_type_invalid';
    }

    private function getMessageToForwardNotFoundMessagePart(): string
    {
        return 'message to forward not found';
    }

    private function getBotIsNotAMemberOfTheChatMessagePart(): string
    {
        return 'bot is not a member of the channel chat';
    }

    private function getMessageCantBeForwardedMessagePart(): string
    {
        return 'message can\'t be forwarded';
    }

    private function getMessageIdsMustBeInIncreasingOrderMessagePart(): string
    {
        return 'message identifiers must be in a strictly increasing order';
    }
}
