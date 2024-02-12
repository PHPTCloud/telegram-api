<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class CantChangePrivateChatTitleException extends TelegramApiException
{
    public const CODE = 'CantChangePrivateChatTitle';
}
