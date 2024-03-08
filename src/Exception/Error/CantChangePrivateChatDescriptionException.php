<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

use PHPTCloud\TelegramApi\Exception\Interfaces\ForbiddenExceptionInterface;

/**
 * @author  Пешко Илья peshkoi@mail.ru
 */
class CantChangePrivateChatDescriptionException extends TelegramApiException implements ForbiddenExceptionInterface
{
    public const CODE = 'CantChangePrivateChatDescription';
}
