<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Этот объект описывает сообщение, которое может быть недоступно боту. Это может быть один из:
 * - Message (https://core.telegram.org/bots/api#message);
 * - InaccessibleMessage (https://core.telegram.org/bots/api#inaccessiblemessage).
 *
 * @see    https://core.telegram.org/bots/api#maybeinaccessiblemessage
 */
interface MaybeInaccessibleMessageInterface
{
}
