<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Enums\ReactionTypeTypeEnum;
use PHPTCloud\TelegramApi\Type\Interfaces\DataObject\ReactionTypeCustomEmojiInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Deserializer\ReactionTypeCustomEmojiDeserializerInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\Factory\ReactionTypeCustomEmojiTypeFactoryInterface;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
class ReactionTypeCustomEmojiDeserializer extends AbstractDeserializer implements ReactionTypeCustomEmojiDeserializerInterface
{
    public function __construct(
        private readonly ReactionTypeCustomEmojiTypeFactoryInterface $reactionTypeCustomEmojiTypeFactory,
    ) {
    }

    public function deserialize(array $data): ReactionTypeCustomEmojiInterface
    {
        $type = $data[TelegramApiFieldEnum::TYPE->value] ?? null;
        $customEmojiId = $data[TelegramApiFieldEnum::CUSTOM_EMOJI_ID->value] ?? null;

        $type = $this->filterString($type, ReactionTypeTypeEnum::CUSTOM_EMOJI->value);
        $customEmojiId = $this->filterString($customEmojiId);

        return $this->reactionTypeCustomEmojiTypeFactory->create($type, $customEmojiId);
    }
}
