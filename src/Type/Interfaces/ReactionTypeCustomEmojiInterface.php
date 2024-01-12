<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 * @version 1.0.0
 *
 * Реакция основана на специальных смайлах.
 * @link    https://core.telegram.org/bots/api#reactiontypecustomemoji
 */
interface ReactionTypeCustomEmojiInterface extends ReactionTypeInterface
{
    /**
     * Пользовательский идентификатор эмодзи.
     *
     * @return string
     */
    public function getCustomEmojiId(): string;
}
