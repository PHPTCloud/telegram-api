<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class CantChangePrivateChatPhotoException extends TelegramApiException
{
    public const CODE = 'CantChangePrivateChatPhoto';
}
