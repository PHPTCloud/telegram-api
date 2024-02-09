<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\BadRequestExceptionInterface;

class MessageCantBeForwardedException extends TelegramApiException implements BadRequestExceptionInterface
{
    public const CODE = 'MessageCantBeForwarded';
}
