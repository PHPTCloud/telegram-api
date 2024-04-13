<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class TooManyRequestException extends TelegramApiException
{
    public const CODE = 'TooManyRequest';
}
