<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\NotFoundExceptionInterface;

class MessageToEditNotFoundException extends TelegramApiException implements NotFoundExceptionInterface
{
    public const CODE = 'MessageToEditNotFound';
}
