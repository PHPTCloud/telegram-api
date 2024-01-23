<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 *
 * Ошибка возникает в случае когда пропущен один из опциональных параметров кнопки.
 */
class CantParseInlineKeyboardButtonException extends TelegramApiException
{
    public const CODE = 'CantParseInlineKeyboardButton';
}
