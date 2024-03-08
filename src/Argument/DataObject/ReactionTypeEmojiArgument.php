<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\DataObject;

use PHPTCloud\TelegramApi\Argument\Interfaces\DataObject\ReactionTypeEmojiArgumentInterface;
use PHPTCloud\TelegramApi\Type\Enums\ReactionTypeTypeEnum;

class ReactionTypeEmojiArgument extends AbstractReactionTypeArgument implements ReactionTypeEmojiArgumentInterface
{
    public function __construct(
        private readonly string $emoji,
    ) {
        parent::__construct(ReactionTypeTypeEnum::EMOJI->value);
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }
}
