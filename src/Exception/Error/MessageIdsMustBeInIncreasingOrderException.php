<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\BadRequestExceptionInterface;

class MessageIdsMustBeInIncreasingOrderException extends TelegramApiException implements BadRequestExceptionInterface
{
    public const CODE = 'MessageIdsMustBeInIncreasingOrder';
}
