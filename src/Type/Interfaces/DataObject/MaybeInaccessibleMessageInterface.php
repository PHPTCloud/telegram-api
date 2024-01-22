<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект описывает сообщение, которое может быть недоступно боту. Это может быть один из:
 * - Message (https://core.telegram.org/bots/api#message);
 * - InaccessibleMessage (https://core.telegram.org/bots/api#inaccessiblemessage).
 *
 * @link    https://core.telegram.org/bots/api#maybeinaccessiblemessage
 */
interface MaybeInaccessibleMessageInterface
{
}
