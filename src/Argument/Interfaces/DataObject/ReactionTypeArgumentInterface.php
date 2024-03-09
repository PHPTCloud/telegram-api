<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект описывает тип реакции.
 *
 * @link https://core.telegram.org/bots/api#reactiontype
 */
interface ReactionTypeArgumentInterface extends ArgumentInterface
{
    /**
     * Тип реакции.
     *
     * @see \PHPTCloud\TelegramApi\Type\Enums\ReactionTypeTypeEnum
     */
    public function getType(): string;

    public function isEmoji(): bool;

    public function isCustomEmojiId(): bool;
}
