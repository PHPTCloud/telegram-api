<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Этот объект описывает тип реакции. В настоящее время это может быть один из:
 * - ReactionTypeEmoji (https://core.telegram.org/bots/api#reactiontypeemoji);
 * - ReactionTypeCustomEmoji (https://core.telegram.org/bots/api#reactiontypecustomemoji).
 * @link    https://core.telegram.org/bots/api#reactiontype
 */
interface ReactionTypeInterface
{
    /**
     * Тип реакции.
     *
     * @return string
     */
    public function getType(): string;
}
