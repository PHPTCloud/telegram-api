<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class DocumentCantBeMixedWithOtherTypesException extends TelegramApiException
{
    public const CODE = 'DocumentCantBeMixedWithOtherTypes';
}
