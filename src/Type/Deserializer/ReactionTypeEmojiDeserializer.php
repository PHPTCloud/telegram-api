<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Deserializer;

use PHPTCloud\TelegramApi\AbstractDeserializer;
use PHPTCloud\TelegramApi\TelegramApiFieldEnum;
use PHPTCloud\TelegramApi\Type\Enums\ReactionTypeTypeEnum;
use PHPTCloud\TelegramApi\Type\Factory\ReactionTypeEmojiTypeFactoryInterface;
use PHPTCloud\TelegramApi\Type\Interfaces\ReactionTypeEmojiInterface;

class ReactionTypeEmojiDeserializer extends AbstractDeserializer implements ReactionTypeEmojiDeserializerInterface
{
    public function __construct(
        private readonly ReactionTypeEmojiTypeFactoryInterface $reactionTypeEmojiTypeFactory,
    ) {}

    public function deserialize(array $data): ReactionTypeEmojiInterface
    {
        $type = $data[TelegramApiFieldEnum::TYPE->value] ?? null;
        $emoji = $data[TelegramApiFieldEnum::EMOJI->value] ?? null;

        $type = $this->filterString($type, ReactionTypeTypeEnum::EMOJI->value);
        $emoji = $this->filterString($emoji);

        return $this->reactionTypeEmojiTypeFactory->create($type, $emoji);
    }
}
