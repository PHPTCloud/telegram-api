<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class ButtonIdInvalidException extends TelegramApiException
{
    public const CODE = 'ButtonIdInvalid';
}
