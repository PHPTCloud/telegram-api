<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\MaybeInaccessibleMessageInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект описывает сообщение, которое может быть недоступно боту. Это может быть один из:
 * - Message (https://core.telegram.org/bots/api#message);
 * - InaccessibleMessage (https://core.telegram.org/bots/api#inaccessiblemessage).
 *
 * @link    https://core.telegram.org/bots/api#maybeinaccessiblemessage
 */
class MaybeInaccessibleMessage implements MaybeInaccessibleMessageInterface
{
}
