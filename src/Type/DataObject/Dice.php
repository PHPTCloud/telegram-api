<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\DataObject;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\DiceInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект представляет собой анимированный смайлик, отображающий случайное значение.
 * @link    https://core.telegram.org/bots/api#dice
 */
class Dice implements DiceInterface
{
    public function __construct(
        private readonly string $emoji,
        private readonly string $value,
    ) {}

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getValue(): string
    {
        return $this->value;
    }
}
