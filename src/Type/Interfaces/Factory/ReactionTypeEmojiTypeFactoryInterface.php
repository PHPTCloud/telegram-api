<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReactionTypeEmojiInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ReactionTypeEmojiTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(string $type, string $emoji): ReactionTypeEmojiInterface;
}
