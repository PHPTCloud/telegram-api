<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Exception\Error;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class NotEnoughRightToChangeCustomTitleException extends TelegramApiException
{
    public const CODE = 'NotEnoughRightToChangeCustomTitle';
}
