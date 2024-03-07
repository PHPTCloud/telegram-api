<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class ChatNotModifiedException extends TelegramApiException
{
    public const CODE = 'ChatNotModified';
}
