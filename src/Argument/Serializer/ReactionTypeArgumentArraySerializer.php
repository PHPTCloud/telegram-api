<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Serializer;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReactionTypeArgumentInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeCustomEmojiArgumentArraySerializerInterface;
use PHPTCloud\TelegramApi\Argument\Interfaces\Serializer\ReactionTypeEmojiArgumentArraySerializerInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ReactionTypeArgumentArraySerializer implements ReactionTypeArgumentArraySerializerInterface
{
    public function __construct(
        private readonly ReactionTypeCustomEmojiArgumentArraySerializerInterface $reactionTypeCustomEmojiArgumentArraySerializer,
        private readonly ReactionTypeEmojiArgumentArraySerializerInterface $reactionTypeEmojiArgumentArraySerializer,
    ) {
    }

    public function serialize(ReactionTypeArgumentInterface $argument): array
    {
        $data = [];

        if ($argument->isCustomEmojiId()) {
            $data = $this->reactionTypeCustomEmojiArgumentArraySerializer->serialize($argument);
        } elseif ($argument->isEmoji()) {
            $data = $this->reactionTypeEmojiArgumentArraySerializer->serialize($argument);
        }

        if (empty($data)) {
            throw new \InvalidArgumentException('Обязательные поля аргумента не заполнены.');
        }

        return $data;
    }
}
