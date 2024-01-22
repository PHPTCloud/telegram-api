<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 *
 * @version 1.0.0
 *
 * Этот объект описывает источник усиления чата. Это может быть один из:
 * - ChatBoostSourcePremium (https://core.telegram.org/bots/api#chatboostsourcepremium);
 * - ChatBoostSourceGiftCode (https://core.telegram.org/bots/api#chatboostsourcegiftcode);
 * - ChatBoostSourceGiveaway (https://core.telegram.org/bots/api#chatboostsourcegiveaway).
 *
 * @see    https://core.telegram.org/bots/api#chatboostsource
 */
interface ChatBoostSourceInterface
{
    /**
     * Источник повышения.
     *
     * @see \PHPTCloud\TelegramApi\Type\Enums\ChatBoostSourceEnum
     */
    public function getSource(): string;

    /**
     * Пользователь, который улучшил чат.
     */
    public function getUser(): UserInterface;
}
