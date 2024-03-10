<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Interfaces\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReactionTypeInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
interface ReactionTypeTypeFactoryInterface extends TypeFactoryInterface
{
    public function create(string $type, string $emoji = null, string $customEmojiId = null): ReactionTypeInterface;
}
