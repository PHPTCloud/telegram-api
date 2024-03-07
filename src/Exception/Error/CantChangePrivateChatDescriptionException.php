<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class CantChangePrivateChatDescriptionException extends TelegramApiException
{
    public const CODE = 'CantChangePrivateChatDescription';
}
