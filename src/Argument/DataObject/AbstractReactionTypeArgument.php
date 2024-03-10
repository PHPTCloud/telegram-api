<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReactionTypeArgumentInterface;
use PHPTCloud\TelegramApi\Type\Enums\ReactionTypeTypeEnum;

abstract class AbstractReactionTypeArgument implements ReactionTypeArgumentInterface
{
    public function __construct(
        private readonly string $type,
    ) {
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function isEmoji(): bool
    {
        return $this->getType() === ReactionTypeTypeEnum::EMOJI->value;
    }

    public function isCustomEmojiId(): bool
    {
        return $this->getType() === ReactionTypeTypeEnum::CUSTOM_EMOJI->value;
    }
}
