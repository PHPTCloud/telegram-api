<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\TelegramApiExceptionInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class TelegramApiException extends \RuntimeException implements TelegramApiExceptionInterface
{
    public const CODE = 'TelegramApiException';

    public function getExceptionCode(): string
    {
        return self::CODE;
    }
}
