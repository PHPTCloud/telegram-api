<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\BadRequestExceptionInterface;

/**
 * Вы получите данное исключение в тех случаях, когда отправляете Inline клавиатуру
 * без url, callbackdata, WebApp или других данных. Inline клавиатуры не поддерживают
 * обычные текстовые кнопки.
 */
class TextButtonsAreUnallowedInInlineKeyboardException extends TelegramApiException implements BadRequestExceptionInterface
{
    public const CODE = 'TextButtonsAreUnallowedInInlineKeyboard';
}
