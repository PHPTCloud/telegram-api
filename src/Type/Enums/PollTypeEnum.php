<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

enum PollTypeEnum: string
{
    case QUIZ = 'quiz';
    case REGULAR = 'regular';
}
