<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\NotFoundExceptionInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class CantFindFieldException extends TelegramApiException implements NotFoundExceptionInterface
{
    public const CODE = 'CantFindField';
}
