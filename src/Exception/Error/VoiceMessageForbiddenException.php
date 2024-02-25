<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class VoiceMessageForbiddenException extends TelegramApiException
{
    public const CODE = 'VoiceMessageForbidden';
}
