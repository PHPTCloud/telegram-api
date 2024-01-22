<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @author  Юдов Никита yudov.nikita@bk.ru
 * @version 1.0.0
 *
 * Этот объект представляет собой анимированный смайлик, отображающий случайное значение.
 * @link    https://core.telegram.org/bots/api#dice
 */
interface DiceInterface
{
    /**
     * Эмодзи, на которых основана анимация броска игральных костей.
     *
     * @return string
     */
    public function getEmoji(): string;

    /**
     * Значение кубика: от 1 до 6 для базовых смайлов «🎲», «🎯» и «🎳», от 1 до 5 для базовых смайлов «🏀»
     * и «⚽», от 1 до 64 для базовых смайлов «🎰».
     *
     * @return string
     */
    public function getValue(): string;
}
