<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

enum ReactionTypeTypeEnum: string {
    case EMOJI = 'emoji';
    case CUSTOM_EMOJI = 'custom_emoji';
}
