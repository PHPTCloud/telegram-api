<?php
declare(strict_types=1);

namespace PHPTCloud\TelegramApi\Type\Enums;

enum MenuButtonEnum: string
{
    case COMMANDS = 'commands';
    case WEB_APP = 'web_app';
    case DEFAULT = 'default';
}
