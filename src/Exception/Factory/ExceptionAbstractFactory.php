<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Factory;

use PHPTCloud\TelegramApi\Exception\Error\BotDomainInvalidException;
use PHPTCloud\TelegramApi\Exception\Error\ButtonIdInvalidException;
use PHPTCloud\TelegramApi\Exception\Error\ButtonQuantityMaxInvalidException;
use PHPTCloud\TelegramApi\Exception\Error\ButtonTypeInvalidException;
use PHPTCloud\TelegramApi\Exception\Error\CantFindFieldException;
use PHPTCloud\TelegramApi\Exception\Error\CantParseInlineKeyboardButtonException;
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
}
