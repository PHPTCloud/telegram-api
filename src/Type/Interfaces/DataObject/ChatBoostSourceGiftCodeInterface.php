<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * Повышение было получено за счет создания подарочных кодов Telegram Premium для усиления чата. Каждый
 * такой код прокачивает чат в 4 раза за время действия соответствующей подписки Telegram Premium.
 *
 * @see    https://core.telegram.org/bots/api#chatboostsourcegiftcode
 */
interface ChatBoostSourceGiftCodeInterface extends ChatBoostSourceInterface
{
}
