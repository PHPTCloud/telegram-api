<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Interfaces\DataObject;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ReactionTypeCustomEmojiArgumentInterface extends ReactionTypeArgumentInterface
{
    /**
     * Идентификатор пользовательской эмодзи.
     */
    public function getCustomEmojiId(): string;
}
