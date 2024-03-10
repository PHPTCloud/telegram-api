<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReactionTypeInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ReactionTypeCustomEmojiTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ReactionTypeEmojiTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ReactionTypeTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ReactionTypeTypeFactory implements ReactionTypeTypeFactoryInterface
{
    public function __construct(
        private readonly ReactionTypeCustomEmojiTypeFactoryInterface $reactionTypeCustomEmojiTypeFactory,
        private readonly ReactionTypeEmojiTypeFactoryInterface $reactionTypeEmojiTypeFactoryInterface,
    ) {
    }

    public function create(string $type, string $emoji = null, string $customEmojiId = null): ReactionTypeInterface
    {
        if ($emoji) {
            return $this->reactionTypeEmojiTypeFactoryInterface->create($type, $emoji);
        } elseif ($customEmojiId) {
            return $this->reactionTypeCustomEmojiTypeFactory->create($type, $customEmojiId);
        }
        throw new \InvalidArgumentException('Невозможно определить тип реакции.');
    }
}
