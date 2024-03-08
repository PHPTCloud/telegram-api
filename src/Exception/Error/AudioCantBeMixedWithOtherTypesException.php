<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\BadRequestExceptionInterface;

/**
 * Возникает, если попытаться отправить аудио с каким-то другим типом медиа файлов
 * в одной группе (см. метод sendMediaGroups).
 *
 * @see https://core.telegram.org/bots/api#sendmediagroup
 *
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class AudioCantBeMixedWithOtherTypesException extends TelegramApiException implements BadRequestExceptionInterface
{
    public const CODE = 'AudioCantBeMixedWithOtherTypes';
}
