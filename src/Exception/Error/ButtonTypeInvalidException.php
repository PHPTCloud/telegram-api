<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\BadRequestExceptionInterface;

class ButtonTypeInvalidException extends TelegramApiException implements BadRequestExceptionInterface
{
    public const CODE = 'ButtonTypeInvalid';
}
