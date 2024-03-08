<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\BadRequestExceptionInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ButtonIdInvalidException extends TelegramApiException implements BadRequestExceptionInterface
{
    public const CODE = 'ButtonIdInvalid';
}
