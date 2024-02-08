<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class ButtonQuantityMaxInvalidException extends TelegramApiException
{
    public const CODE = 'ButtonQuantityMaxInvalid';
}
