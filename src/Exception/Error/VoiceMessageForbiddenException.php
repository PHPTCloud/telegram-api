<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\ForbiddenExceptionInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class VoiceMessageForbiddenException extends TelegramApiException implements ForbiddenExceptionInterface
{
    public const CODE = 'VoiceMessageForbidden';
}
