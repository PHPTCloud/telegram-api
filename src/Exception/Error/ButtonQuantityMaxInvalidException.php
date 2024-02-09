<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\BadRequestExceptionInterface;

class ButtonQuantityMaxInvalidException extends TelegramApiException implements BadRequestExceptionInterface
{
    public const CODE = 'ButtonQuantityMaxInvalid';
}
