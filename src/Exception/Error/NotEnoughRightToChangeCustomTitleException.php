<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

class NotEnoughRightToChangeCustomTitleException extends TelegramApiException
{
    public const CODE = 'NotEnoughRightToChangeCustomTitle';
}
