<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Factory;

use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeInterface;

class ReactionTypeTypeFactory implements ReactionTypeTypeFactoryInterface
{
    public function __construct(
        private readonly ReactionTypeCustomEmojiTypeFactoryInterface $reactionTypeCustomEmojiTypeFactory,
        private readonly ReactionTypeEmojiTypeFactoryInterface $reactionTypeEmojiTypeFactoryInterface,
    ) {}

    public function create(string $type, ?string $emoji = null, ?string $customEmojiId = null): ReactionTypeInterface
    {
        if ($emoji) {
            return $this->reactionTypeEmojiTypeFactoryInterface->create($type, $emoji);
        } elseif ($customEmojiId) {
            return $this->reactionTypeCustomEmojiTypeFactory->create($type, $customEmojiId);
        } else {
            throw new \InvalidArgumentException('Невозможно определить тип реакции.');
        }
    }
}
