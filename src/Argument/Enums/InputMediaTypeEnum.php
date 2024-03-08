<?php

declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Argument\Enums;

enum InputMediaTypeEnum: string
{
    case AUDIO = 'audio';
    case DOCUMENT = 'document';
    case PHOTO = 'photo';
    case VIDEO = 'video';
    case ANIMATION = 'animation';
}
