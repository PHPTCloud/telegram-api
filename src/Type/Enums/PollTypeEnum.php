<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

/**
 * @author  Юдов Алексей tcloud.ax@gmail.com
 */
enum PollTypeEnum: string
{
    case QUIZ = 'quiz';
    case REGULAR = 'regular';
}
