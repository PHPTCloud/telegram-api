<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 *
 * @version 1.0.0
 */
enum ReactionTypeTypeEnum: string
{
    case EMOJI = 'emoji';
    case CUSTOM_EMOJI = 'custom_emoji';
}
