<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeInterface;

class ReactionTypeDeserializer implements ReactionTypeDeserializerInterface
{
    public function __construct(
        private readonly ReactionTypeCustomEmojiDeserializerInterface $reactionTypeCustomEmojiDeserializer,
        private readonly ReactionTypeEmojiDeserializerInterface       $reactionTypeEmojiDeserializer,
    ) {}

    public function deserialize(array $data): ReactionTypeInterface
    {
        if (isset($data[TelegramApiFieldEnum::CUSTOM_EMOJI_ID->value])) {
            return $this->reactionTypeCustomEmojiDeserializer->deserialize($data);
        } elseif (isset($data[TelegramApiFieldEnum::EMOJI->value])) {
            return $this->reactionTypeEmojiDeserializer->deserialize($data);
        } else {
            throw new \InvalidArgumentException('Невозможно десериализовать данные.');
        }
    }

    public function deserializeArrayOfTypes(array $types): array
    {
        $items = [];
        foreach ($types as $type) {
            $items[] = $this->deserialize($type);
        }

        return $items;
    }
}
