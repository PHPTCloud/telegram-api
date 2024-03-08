<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\TelegramApiExceptionInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class TelegramApiException extends \RuntimeException implements TelegramApiExceptionInterface
{
    public const CODE = 'TelegramApiException';

    public function getExceptionCode(): string
    {
        return self::CODE;
    }
}
