<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class ButtonTypeInvalidException extends TelegramApiException
{
    public const CODE = 'ButtonTypeInvalid';
}
