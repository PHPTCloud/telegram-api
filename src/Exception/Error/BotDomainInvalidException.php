<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class BotDomainInvalidException extends TelegramApiException
{
    public const CODE = 'BotDomainInvalid';
}
