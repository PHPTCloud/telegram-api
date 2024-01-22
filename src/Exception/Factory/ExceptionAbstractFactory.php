<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Factory;

use PHPTCloud\TelegramApi\Exception\Error\CantFindFieldException;
use PHPTCloud\TelegramApi\Exception\Error\TelegramApiException;
use PHPTCloud\TelegramApi\Exception\Error\UnsupportedParseModeException;
use PHPTCloud\TelegramApi\Exception\Interfaces\ExceptionAbstractFactoryInterface;
use PHPTCloud\TelegramApi\Exception\Interfaces\TelegramApiExceptionInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
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
        } else {
            return new TelegramApiException($message);
        }
    }

    private function getUnsupportedMessagePart(): string
    {
        return 'unsupported parse_mode';
    }

    private function getCantFindFieldMessagePart(): string
    {
        return 'can\'t find field';
    }
}
