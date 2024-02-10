<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class InvalidResourceTypeException extends TelegramApiException
{
    public const CODE = 'InvalidResourceType';
}
