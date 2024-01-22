<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 */
class CantFindFieldException extends TelegramApiException
{
    public const CODE = 'CantFindField';
}
