<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReactionTypeCustomEmojiArgumentInterface;
use PHPTCloud\TelegramApi\Type\Enums\ReactionTypeTypeEnum;

class ReactionTypeCustomEmojiArgument extends AbstractReactionTypeArgument implements ReactionTypeCustomEmojiArgumentInterface
{
    public function __construct(
        private readonly string $customEmojiId,
    ) {
        parent::__construct(ReactionTypeTypeEnum::CUSTOM_EMOJI->value);
    }

    public function getCustomEmojiId(): string
    {
        return $this->customEmojiId;
    }
}
