<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\BadRequestExceptionInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Ошибка возникает в случае когда пропущен один из опциональных параметров кнопки.
 */
class CantParseInlineKeyboardButtonException extends TelegramApiException implements BadRequestExceptionInterface
{
    public const CODE = 'CantParseInlineKeyboardButton';
}
