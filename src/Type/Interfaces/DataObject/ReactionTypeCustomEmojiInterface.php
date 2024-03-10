<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * Реакция основана на специальных смайлах.
 *
 * @see    https://core.telegram.org/bots/api#reactiontypecustomemoji
 */
interface ReactionTypeCustomEmojiInterface extends ReactionTypeInterface
{
    /**
     * Пользовательский идентификатор эмодзи.
     */
    public function getCustomEmojiId(): string;
}
