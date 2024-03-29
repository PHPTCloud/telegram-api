<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Этот объект описывает тип реакции. В настоящее время это может быть один из:
 * - ReactionTypeEmoji (https://core.telegram.org/bots/api#reactiontypeemoji);
 * - ReactionTypeCustomEmoji (https://core.telegram.org/bots/api#reactiontypecustomemoji).
 *
 * @see    https://core.telegram.org/bots/api#reactiontype
 */
interface ReactionTypeInterface
{
    /**
     * Тип реакции.
     */
    public function getType(): string;
}
