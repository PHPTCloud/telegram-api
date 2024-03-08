<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

/**
 * Возникает, если попытаться отправить аудио с каким-то другим типом медиа файлов
 * в одной группе (см. метод sendMediaGroups).
 *
 * @link https://core.telegram.org/bots/api#sendmediagroup
 */
class AudioCantBeMixedWithOtherTypesException extends TelegramApiException
{
    public const CODE = 'AudioCantBeMixedWithOtherTypes';
}
